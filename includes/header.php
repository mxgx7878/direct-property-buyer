<?php require_once __DIR__ . '/config.php'; ?>
<div class="bg-rich text-white/60 text-xs hidden md:block">
    <div class="max-w-7xl mx-auto px-6 h-9 flex items-center justify-between"><span class="tracking-wide">Property Exit &amp; Value Maximisation <span class="text-gold">|</span> Victoria</span>
        <div class="flex items-center gap-5"><span>Free, no-obligation assessment &middot; Phone <button id="revealPhone" class="text-gold-soft hover:text-white font-semibold transition">0421 XXX *** &mdash; tap to reveal</button></span></div>
    </div>
</div>
<header class="sticky top-0 z-40 bg-navy/95 backdrop-blur supports-[backdrop-filter]:bg-navy/90 border-b border-gold/25">
    <div class="max-w-7xl mx-auto px-5 md:px-6 flex items-center justify-between gap-4 h-[78px]">
        <a href="index.php" data-link class="flex items-center shrink-0"><img src="./logo.png" alt="Direct Property Buyer" class="h-16 w-auto"></a>
        <nav class="hidden xl:flex items-center gap-0.5 text-[0.85rem] text-ivory/85 whitespace-nowrap shrink-0">
            <a href="index.php" data-link data-nav="/" class="px-2.5 py-2 hover:text-gold-soft transition">Home</a>
            <div class="has-dd relative"><button class="px-2.5 py-2 hover:text-gold-soft transition inline-flex items-center gap-1.5">Property Solutions <span class="text-gold text-[0.7rem]">&#9662;</span></button>
                <div class="dd absolute left-0 top-full pt-3 w-72">
                    <div class="bg-white rounded-xl shadow-soft border border-line overflow-hidden py-2 text-sm text-ink"><a href="property-solutions.php" data-link class="block px-4 py-2.5 hover:bg-ivory hover:text-gold-dark transition font-medium">Property Solutions overview</a>
                        <div class="h-px bg-line my-1"></div><p class="px-4 pt-1.5 pb-1 text-[0.62rem] uppercase tracking-[0.14em] text-gold-dark/80 font-semibold">Sell As-Is / Direct Cash Offer</p><a href="sell-as-is.php" data-link class="block pl-7 pr-4 py-2 hover:bg-ivory hover:text-gold-dark transition">Sell As-Is</a><a href="direct-cash-offer.php" data-link class="block pl-7 pr-4 py-2 hover:bg-ivory hover:text-gold-dark transition">Direct Cash Offer</a><div class="h-px bg-line my-1"></div><a href="renovate-before-sale.php" data-link class="block px-4 py-2.5 hover:bg-ivory hover:text-gold-dark transition">Renovate Now, Pay Later</a><a href="property-takeover.php" data-link class="block px-4 py-2.5 hover:bg-ivory hover:text-gold-dark transition">Property Takeover</a><a href="compare-your-options.php" data-link class="block px-4 py-2.5 hover:bg-ivory hover:text-gold-dark transition">Compare Your Options</a>
                    </div>
                </div>
            </div>
            <a href="buyers-agent-services.php" data-link data-nav="/buyers-agent-services" class="px-2.5 py-2 hover:text-gold-soft transition">Buyer&rsquo;s Agent Services</a>
            <a href="joint-venture-opportunities.php" data-link data-nav="/joint-venture-opportunities" class="px-2.5 py-2 hover:text-gold-soft transition">Joint Ventures</a>
            <a href="property-guides.php" data-link data-nav="/property-guides" class="px-2.5 py-2 hover:text-gold-soft transition">Property Guides</a>
            <a href="about.php" data-link data-nav="/about" class="px-2.5 py-2 hover:text-gold-soft transition">About</a>
            <a href="contact.php" data-link data-nav="/contact" class="px-2.5 py-2 hover:text-gold-soft transition">Contact</a>
        </nav>
        <div class="hidden xl:flex items-center gap-2.5 shrink-0"><a href="contact.php" data-link class="btn btn-gold btn-sm">Get in Touch</a><a href="tel:<?= PHONE_INTL ?>" class="btn btn-light btn-sm"><i class="fa-solid fa-phone"></i> Call Us</a></div>
        <button id="burger" class="xl:hidden text-ivory text-2xl w-10 h-10 inline-flex items-center justify-center" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
    </div>
</header>
<div id="mnavWrap" class="fixed inset-0 z-[70] hidden xl:hidden">
    <div id="mscrim" class="absolute inset-0 bg-rich/70 backdrop-blur-sm"></div>
    <aside id="mnav" class="absolute right-0 top-0 h-full w-[86%] max-w-sm bg-navy shadow-2xl flex flex-col">
        <div class="flex items-center justify-between px-5 h-[78px] border-b border-white/10"><img src="./logo.png" alt="Direct Property Buyer" class="h-11 w-auto"><button id="mclose" class="text-ivory text-2xl w-10 h-10 inline-flex items-center justify-center" aria-label="Close menu"><i class="fa-solid fa-xmark"></i></button></div>
        <nav class="flex-1 overflow-y-auto px-5 py-5 text-ivory/85">
            <a href="index.php" data-link class="block py-3 border-b border-white/5 text-lg font-display">Home</a>
            <p class="text-[0.68rem] uppercase tracking-[0.2em] text-gold-dark mt-5 mb-1">Property Solutions</p>
            <a href="property-solutions.php" data-link class="block py-2.5 text-sm">Overview</a>
            <p class="text-[0.6rem] uppercase tracking-[0.16em] text-gold-dark/70 mt-2.5 mb-0.5">Sell As-Is / Direct Cash Offer</p>
            <a href="sell-as-is.php" data-link class="block py-2 text-sm pl-3">Sell As-Is</a>
            <a href="direct-cash-offer.php" data-link class="block py-2 text-sm pl-3">Direct Cash Offer</a>
            <a href="renovate-before-sale.php" data-link class="block py-2.5 text-sm mt-1">Renovate Now, Pay Later</a>
            <a href="property-takeover.php" data-link class="block py-2.5 text-sm">Property Takeover</a>
            <a href="compare-your-options.php" data-link class="block py-2.5 text-sm">Compare Your Options</a>
            <p class="text-[0.68rem] uppercase tracking-[0.2em] text-gold-dark mt-5 mb-1">Situations</p>
            <a href="abandoned-property.php" data-link class="block py-2.5 text-sm">Abandoned Property</a><a href="auction-preparation.php" data-link class="block py-2.5 text-sm">Auction Preparation</a><a href="damaged-property.php" data-link class="block py-2.5 text-sm">Damaged Property</a><a href="divorce-separation.php" data-link class="block py-2.5 text-sm">Divorce / Separation</a><a href="failed-auction.php" data-link class="block py-2.5 text-sm">Failed Auction</a><a href="hoarder-cluttered-property.php" data-link class="block py-2.5 text-sm">Hoarder / Cluttered</a><a href="inherited-property.php" data-link class="block py-2.5 text-sm">Inherited Property</a><a href="investment-property-exit.php" data-link class="block py-2.5 text-sm">Investment Property Exit</a><a href="low-market-value.php" data-link class="block py-2.5 text-sm">Low Market Value</a><a href="mortgage-pressure.php" data-link class="block py-2.5 text-sm">Mortgage Pressure</a><a href="off-market-sale.php" data-link class="block py-2.5 text-sm">Off-Market Sale</a><a href="pre-sale-renovation.php" data-link class="block py-2.5 text-sm">Pre-Sale Renovation</a><a href="problem-tenants.php" data-link class="block py-2.5 text-sm">Problem Tenants</a><a href="property-renovation.php" data-link class="block py-2.5 text-sm">Property Renovation</a><a href="property-styling.php" data-link class="block py-2.5 text-sm">Property Styling</a><a href="relocation.php" data-link class="block py-2.5 text-sm">Relocation</a><a href="retirement-downsizing.php" data-link class="block py-2.5 text-sm">Retirement / Downsizing</a><a href="sell-without-an-agent.php" data-link class="block py-2.5 text-sm">Sell Without an Agent</a><a href="unfinished-renovation.php" data-link class="block py-2.5 text-sm">Unfinished Renovation</a><a href="urgent-sale.php" data-link class="block py-2.5 text-sm">Need to Sell Quickly</a><a href="vacant-property.php" data-link class="block py-2.5 text-sm">Vacant Property</a><a href="value-maximisation.php" data-link class="block py-2.5 text-sm">Value Maximisation</a><a href="deceased-estate.php" data-link class="block py-2.5 text-sm">Deceased Estate</a>
            <p class="text-[0.68rem] uppercase tracking-[0.2em] text-gold-dark mt-5 mb-1">More</p>
            <a href="buyers-agent-services.php" data-link class="block py-2.5 text-sm">Buyer&rsquo;s Agent Services</a>
            <a href="joint-venture-opportunities.php" data-link class="block py-2.5 text-sm">Joint Venture Opportunities</a>
            <a href="property-guides.php" data-link class="block py-2.5 text-sm">Property Guides</a>
            <a href="about.php" data-link class="block py-2.5 text-sm">About</a>
            <a href="contact.php" data-link class="block py-2.5 text-sm">Contact</a>
        </nav>
        <div class="p-5 border-t border-white/10 space-y-2.5"><a href="contact.php" data-link class="btn btn-gold w-full">Request a Free Property Assessment</a>
            <div class="grid grid-cols-2 gap-2.5"><a href="tel:<?= PHONE_INTL ?>" class="btn btn-light w-full"><i class="fa-solid fa-phone"></i> Call</a><a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener" class="btn btn-light w-full"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a></div>
        </div>
    </aside>
</div>