# Direct Property Buyer — PHP structure

Converted from the static HTML site into a shared-include PHP structure.

## Structure

```
├── *.php                 One thin page per original .html (55 pages)
├── includes/
│   ├── config.php        Site constants: phone, WhatsApp, email, ABN, BASE_URL + canonical_url()
│   ├── head.php          <!doctype>…</head><body> + per-page <title>/meta + fonts + Tailwind + styles.css
│   ├── header.php        Announcement bar + sticky nav + mobile drawer
│   └── footer.php        Footer + WhatsApp float + mobile bottom bar + app.js + </body></html>
├── assets/
│   ├── tailwind.js       The single Tailwind config (loaded once, from head.php)
│   ├── styles.css        ← REPLACE with your existing styles.css
│   └── app.js            ← REPLACE with your existing app.js
├── logo.png / newlogo.png / fav.png
├── robots.txt
└── sitemap.xml
```

## How a page works

```php
<?php
$page_title       = "About | Direct Property Buyer";
$page_description = "…";
$page_slug        = "about";          // drives canonical + og:url
// optional: $og_title / $og_description if they differ from title/description
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="app"> … unique content … </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
```

## What changed vs the original

1. **Header/footer/head are now single includes** — edit the nav or footer once in `includes/` and every page updates.
2. **Tailwind config lives in one file** (`assets/tailwind.js`), loaded once via `head.php`, instead of being duplicated in all 55 heads.
3. **Internal links rewritten** `*.html` → `*.php` (external links, `wa.me`, `tel:`, `mailto:` untouched).
4. **Canonical / og:url** are generated from `$page_slug` (`index` → site root, others → `/slug.php`). To use extension-less URLs later, change `canonical_url()` in `config.php` and add a server rewrite.
5. **Phone / WhatsApp / email / ABN** are pulled from `config.php` so they never drift between pages.
6. **Logo + favicon** now point to `/logo.png` and `/fav.png` (the files present in the project). The originals referenced `./logo.jfif` / `./fav.jfif`, which weren't in the project. Swap back in head.php/header.php/footer.php if you prefer the .jfif files.

## Before deploy

- Drop your real `styles.css` and `app.js` into `assets/` (the ones here are placeholders).
- Assets use root-absolute paths (`/assets/…`, `/logo.png`). If the site runs in a subfolder, either move it to the domain root or change those paths.
- Requires PHP (tested on PHP 8.3). Any standard PHP host works; no framework or Composer needed.
