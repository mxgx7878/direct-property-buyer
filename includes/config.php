<?php
/**
 * Site-wide configuration.
 * Change values here once and they update everywhere.
 */

// Base URL used to build canonical + og:url tags (no trailing slash).
define('BASE_URL', 'https://www.directpropertybuyer.com.au');

// Contact details (kept in one place so they never drift between pages).
define('PHONE_INTL',   '+61421300305');            // used in tel: links
define('WHATSAPP_URL', 'https://wa.me/61421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I\'d%20like%20a%20free%2C%20no-obligation%20property%20assessment.');
define('EMAIL',        'hello@directpropertybuyer.com.au');
define('ABN',          '37 599 548 335');

/**
 * Resolve the canonical URL for the current page from its slug.
 * Home ("index") maps to the site root.
 */
function canonical_url(string $slug): string {
    if ($slug === 'index' || $slug === '') {
        return BASE_URL . '/';
    }
    return BASE_URL . '/' . $slug . '.php';
}
