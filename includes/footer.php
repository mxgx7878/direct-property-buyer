<?php require_once __DIR__ . '/config.php'; ?>
<footer class="bg-rich text-ivory/70 pt-16 pb-8 border-t border-gold/20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid gap-10 pb-12 border-b border-white/10 sm:grid-cols-2 lg:grid-cols-4">
            <div><img src="./logo.png" alt="Direct Property Buyer" class="h-30 w-auto mb-5">
                <p class="text-sm leading-relaxed mb-6 max-w-xs">A smarter way to sell when timing matters. Practical, no-pressure property options for Victorian owners.</p>
                <div class="flex gap-3"><a href="https://facebook.com" target="_blank" rel="noopener" class="soc" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><a href="https://instagram.com" target="_blank" rel="noopener" class="soc" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a><a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="soc" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a></div>
            </div>
            <div>
                <h4 class="text-white font-semibold text-sm mb-4 tracking-wide">Property Solutions</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="sell-as-is.php" data-link class="hover:text-gold-soft transition">Sell As-Is</a></li>
                    <li><a href="renovate-before-sale.php" data-link class="hover:text-gold-soft transition">Renovate Now, Pay Later</a></li>
                    <li><a href="property-takeover.php" data-link class="hover:text-gold-soft transition">Property Takeover</a></li>
                    <li><a href="direct-cash-offer.php" data-link class="hover:text-gold-soft transition">Direct Cash Offer</a></li>
                    <li><a href="compare-your-options.php" data-link class="hover:text-gold-soft transition">Compare Your Options</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold text-sm mb-4 tracking-wide">Situations</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="abandoned-property.php" data-link class="hover:text-gold-soft transition">Abandoned Property</a></li>
                    <li><a href="auction-preparation.php" data-link class="hover:text-gold-soft transition">Auction Preparation</a></li>
                    <li><a href="damaged-property.php" data-link class="hover:text-gold-soft transition">Damaged Property</a></li>
                    <li><a href="divorce-separation.php" data-link class="hover:text-gold-soft transition">Divorce / Separation</a></li>
                    <li><a href="failed-auction.php" data-link class="hover:text-gold-soft transition">Failed Auction</a></li>
                    <li><a href="hoarder-cluttered-property.php" data-link class="hover:text-gold-soft transition">Hoarder / Cluttered</a></li>
                    <li><a href="inherited-property.php" data-link class="hover:text-gold-soft transition">Inherited Property</a></li>
                    <li><a href="investment-property-exit.php" data-link class="hover:text-gold-soft transition">Investment Property Exit</a></li>
                    <li><a href="low-market-value.php" data-link class="hover:text-gold-soft transition">Low Market Value</a></li>
                    <li><a href="mortgage-pressure.php" data-link class="hover:text-gold-soft transition">Mortgage Pressure</a></li>
                    <li><a href="off-market-sale.php" data-link class="hover:text-gold-soft transition">Off-Market Sale</a></li>
                    <li><a href="pre-sale-renovation.php" data-link class="hover:text-gold-soft transition">Pre-Sale Renovation</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold text-sm mb-4 tracking-wide">Company</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="about.php" data-link class="hover:text-gold-soft transition">About</a></li>
                    <li><a href="buyers-agent-services.php" data-link class="hover:text-gold-soft transition">Buyer&rsquo;s Agent Services</a></li>
                    <li><a href="joint-venture-opportunities.php" data-link class="hover:text-gold-soft transition">Joint Ventures</a></li>
                    <li><a href="property-guides.php" data-link class="hover:text-gold-soft transition">Property Guides</a></li>
                    <li><a href="contact.php" data-link class="hover:text-gold-soft transition">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-6 justify-between pt-8">
            <div class="text-xs leading-relaxed max-w-xl">
                <p class="mb-2">Direct Property Buyer is a business name of The Trustee for Brad Family Trust. <br /> ABN: 37 599 548 335.</p>
                <p class="text-ivory/45">Phone <button id="revealPhoneFooter" class="text-gold-soft/90 cursor-pointer hover:text-gold-soft transition font-semibold bg-transparent border-0 p-0">0421 XXX *** &mdash; tap to reveal</button> &middot; <a href="mailto:<?= EMAIL ?>" class="text-gold-soft/90"><?= EMAIL ?></a> </p>
            </div>
            <div class="flex flex-wrap gap-x-5 gap-y-2 text-xs text-ivory/55"><a href="contact.php" data-link class="hover:text-gold-soft transition">Contact</a><a href="privacy-policy.php" data-link class="hover:text-gold-soft transition">Privacy Policy</a><a href="terms.php" data-link class="hover:text-gold-soft transition">Terms</a><a href="disclaimer.php" data-link class="hover:text-gold-soft transition">Disclaimer</a><a href="cookies-analytics.php" data-link class="hover:text-gold-soft transition">Cookies / Analytics</a></div>
        </div>
        <p class="text-center text-xs text-ivory/35 mt-8">&copy; <span data-year></span> Direct Property Buyer &middot; Presented by Orchid Digital Media.</p>
    </div>
</footer>
<a href="contact.php" data-link class="hidden lg:inline-flex fixed bottom-6 right-6 z-30 btn btn-gold shadow-2xl"><i class="fa-solid fa-phone"></i> Request a Callback</a>
<div class="lg:hidden fixed bottom-0 inset-x-0 z-50 bg-navy/95 backdrop-blur border-t border-gold/30 grid grid-cols-3 text-center">
    <a href="tel:<?= PHONE_INTL ?>" class="py-2.5 text-ivory text-[0.7rem] font-semibold flex flex-col items-center gap-0.5"><span class="text-gold-soft text-lg leading-none"><i class="fa-solid fa-phone"></i></span>Call</a>
    <a href="contact.php" data-link class="py-2.5 text-ivory text-[0.7rem] font-semibold flex flex-col items-center gap-0.5 border-x border-white/10"><span class="text-gold-soft text-lg leading-none"><i class="fa-solid fa-star"></i></span>Get in Touch</a>
    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="py-2.5 text-ivory text-[0.7rem] font-semibold flex flex-col items-center gap-0.5"><span class="text-gold-soft text-lg leading-none"><i class="fa-brands fa-whatsapp"></i></span>WhatsApp</a>
</div>
<script src="./assets/app.js"></script>
</body>

</html>