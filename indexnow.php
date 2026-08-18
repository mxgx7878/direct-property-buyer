<?php
/**
 * IndexNow bulk submission — Direct Property Buyer
 *
 * Usage (CLI):
 *   php indexnow-push.php              → dry run, prints what would be sent
 *   php indexnow-push.php --send       → actually submits
 *   php indexnow-push.php --send --all → include the guide pages too
 *
 * Reads URLs straight from sitemap.xml so the list never drifts out of sync.
 */

declare(strict_types=1);

// ---------------------------------------------------------------- config ---
const HOST         = 'www.directpropertybuyer.com.au';
const INDEXNOW_KEY = 'e6c2efea99954ab591f8b70423125f54';
const SITEMAP      = __DIR__ . '/sitemap.xml';
const ENDPOINT     = 'https://api.indexnow.org/IndexNow';
const BATCH_SIZE   = 10000; // IndexNow hard limit per request

// Guide pages held back until they have unique copy. Drop this list (or pass
// --all) once the client's real article content is in.
const HOLD_BACK = [
    'sell-as-is-or-renovate-first.php',
    'auction-failed-victoria-next-steps.php',
    'sell-deceased-estate-victoria.php',
    'selling-property-with-tenants.php',
    'how-much-to-spend-before-selling.php',
    'private-agent-or-direct-buyer.php',
    'what-happens-direct-assessment.php',
    'avoid-rushing-property-decision.php',
    'sell-damaged-or-cluttered-as-is.php',
    'before-selling-vacant-property.php',
];

// ----------------------------------------------------------------- guard ---
if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit("CLI only.\n");
}

$argvFlags = $argv ?? [];
$doSend    = in_array('--send', $argvFlags, true);
$includeAll = in_array('--all', $argvFlags, true);

$keyLocation = 'https://' . HOST . '/' . INDEXNOW_KEY . '.txt';

// ------------------------------------------------------- read the sitemap ---
if (!is_readable(SITEMAP)) {
    exit("ERROR: cannot read " . SITEMAP . "\n");
}

$xml = simplexml_load_file(SITEMAP);
if ($xml === false) {
    exit("ERROR: sitemap.xml is not valid XML.\n");
}

$urls = [];
foreach ($xml->url as $entry) {
    $loc = trim((string) $entry->loc);
    if ($loc === '') {
        continue;
    }
    // Only submit URLs that actually belong to this host, or IndexNow 422s.
    if (parse_url($loc, PHP_URL_HOST) !== HOST) {
        fwrite(STDERR, "SKIP (wrong host): $loc\n");
        continue;
    }
    if (!$includeAll) {
        $file = basename((string) parse_url($loc, PHP_URL_PATH));
        if (in_array($file, HOLD_BACK, true)) {
            continue;
        }
    }
    $urls[] = $loc;
}

$urls = array_values(array_unique($urls));

if (!$urls) {
    exit("Nothing to submit.\n");
}

printf("Host:        %s\n", HOST);
printf("Key file:    %s\n", $keyLocation);
printf("URLs:        %d%s\n", count($urls), $includeAll ? ' (all)' : ' (guides held back)');

// ------------------------------------------- verify the key file is live ---
$keyCheck = @file_get_contents($keyLocation, false, stream_context_create([
    'http' => ['timeout' => 10, 'ignore_errors' => true],
]));

if ($keyCheck === false || trim($keyCheck) !== INDEXNOW_KEY) {
    exit("\nERROR: key file at {$keyLocation} is missing or its contents do not\n"
       . "match the key. Fix this before submitting — every request will 403.\n");
}
echo "Key file:    verified OK\n";

if (!$doSend) {
    echo "\nDRY RUN. Re-run with --send to submit.\n";
    foreach ($urls as $u) {
        echo "  $u\n";
    }
    exit(0);
}

// ---------------------------------------------------------------- submit ---
foreach (array_chunk($urls, BATCH_SIZE) as $i => $batch) {
    $payload = json_encode([
        'host'        => HOST,
        'key'         => INDEXNOW_KEY,
        'keyLocation' => $keyLocation,
        'urlList'     => $batch,
    ], JSON_UNESCAPED_SLASHES);

    $ch = curl_init(ENDPOINT);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($payload),
        ],
        CURLOPT_POSTFIELDS     => $payload,
    ]);

    $body = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err  = curl_error($ch);
    curl_close($ch);

    $batchNo = $i + 1;

    if ($err !== '') {
        echo "\nBatch {$batchNo}: cURL error — {$err}\n";
        continue;
    }

    $meaning = match (true) {
        $code === 200 => 'OK — URLs accepted, key valid',
        $code === 202 => 'Accepted — key still pending verification',
        $code === 400 => 'Bad request — malformed JSON',
        $code === 403 => 'Forbidden — key file not found or mismatched',
        $code === 422 => 'Unprocessable — URLs do not match the stated host',
        $code === 429 => 'Rate limited — too many requests, back off',
        default       => 'Unexpected response',
    };

    printf("\nBatch %d: HTTP %d — %s (%d URLs)\n", $batchNo, $code, $meaning, count($batch));
    if (trim((string) $body) !== '') {
        echo "Response: " . trim((string) $body) . "\n";
    }
}

echo "\nDone. Check Bing Webmaster Tools → IndexNow for per-URL status.\n";