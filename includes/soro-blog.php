<?php
/**
 * Reusable SORO blog embed.
 *
 * The embed ID now lives in ONE place. To show the SORO blog feed on any page:
 *   <?php require __DIR__ . '/includes/soro-blog.php'; ?>
 *
 * If SORO ever gives you a new embed ID, change it here only.
 * Do not include this twice on the same page (you'd render two feeds).
 */
?>
<div id="soro-blog"></div>
<script src="https://app.trysoro.com/api/embed/39a658f7-376f-48d4-aa11-cdf04f51c8e2" defer></script>