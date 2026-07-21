<?php
/**
 * Shared document head.
 * Expects these variables to be set by the page BEFORE including this file:
 *   $page_title        (string)  – full <title> text
 *   $page_description  (string)  – meta description
 *   $page_slug         (string)  – slug, e.g. "about" (used for canonical/og:url)
 *   $og_title          (string)  – optional; falls back to $page_title
 *   $og_description    (string)  – optional; falls back to $page_description
 */
require_once __DIR__ . '/config.php';

$page_title       = $page_title       ?? 'Direct Property Buyer';
$page_description = $page_description  ?? '';
$page_slug        = $page_slug        ?? 'index';
$og_title         = $og_title         ?? $page_title;
$og_description   = $og_description   ?? $page_description;
$canonical        = canonical_url($page_slug);
?>
<!doctype html>
<html lang="en-AU">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($page_title, ENT_QUOTES) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES) ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES) ?>">
<meta property="og:title" content="<?= htmlspecialchars($og_title, ENT_QUOTES) ?>">
<meta property="og:description" content="<?= htmlspecialchars($og_description, ENT_QUOTES) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES) ?>">
<link rel="icon" type="image/x-icon" href="./favicon.ico"  sizes="any">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- Tailwind: CDN runtime + one shared config file (assets/tailwind.js) -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="./assets/tailwind.js"></script>
<link rel="stylesheet" href="./assets/styles.css">
</head>
<body>