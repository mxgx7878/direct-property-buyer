<?php
$page_title       = 'Compare Your Options | Direct Property Buyer';
$page_description = 'Direct sale, property takeover, renovate now pay later or agent sale — compare the trade-offs in speed, certainty, effort and privacy before you decide.';
$page_slug        = 'compare-your-options';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="app">
    <section class="relative bg-navy overflow-hidden">
        <div class="absolute inset-0"><img
                src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1700&q=80"
                onerror="this.onerror=null;this.src='https://placehold.co/1200x800/0B1F2A/C49A5A?text=Direct+Property+Buyer'"
                class="w-full h-full object-cover" alt=""></div>
        <div class="absolute inset-0 overlay-grad"></div>
        <div class="relative max-w-7xl mx-auto px-6 pt-16 pb-14 md:pt-24 md:pb-20">
            <nav class="text-xs text-ivory/55 mb-5 flex items-center gap-2 flex-wrap"><a href="index.php" data-link
                    class="hover:text-gold-soft">Home</a> <span>›</span> <a href="property-solutions.php" data-link
                    class="hover:text-gold-soft">Property Solutions</a> <span>›</span> <span
                    class="text-ivory/80">Compare</span></nav>
            <div class="mb-5"><span class="eyebrow light">Compare Your Options</span></div>
            <h1
                class="font-display text-white text-[2.2rem] sm:text-4xl lg:text-[3.1rem] leading-[1.08] max-w-3xl mb-5">
                Understand the trade-offs before you decide.</h1>
            <p class="text-ivory/85 text-lg leading-relaxed max-w-2xl mb-8">There is no single best way to sell — only
                the way that best fits your property, your timeline and your circumstances. Here is an honest comparison
                of the main routes.</p>
            <div class="flex flex-wrap gap-3"><a href="contact.php" data-link class="btn btn-gold">Request a Free
                    Property Assessment</a><a
                    href="https://wa.me/61421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I'd%20like%20a%20free%2C%20no-obligation%20property%20assessment."
                    target="_blank" rel="noopener" class="btn btn-light">Message Us on WhatsApp</a></div>
        </div>
    </section>

     <?php
$cmp_eyebrow = 'At a glance';
$cmp_heading = 'Four routes, scored 0–5';
$cmp_bg      = 'bg-white';
$cmp_note    = 'Higher is generally better for you. These scores are general guidance only — every property is different.';
include __DIR__ . '/includes/comparison-table.php';
?>
    <section class="py-16 md:py-24 bg-ivory">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-10 reveal">
                <div>
                    <div class="mb-4"><span class="eyebrow ">Pros and cons</span></div>
                    <h2 class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4">The detail behind
                        the scores</h2>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="card p-7 reveal"><span class="accent"></span>
                    <h4 class="font-display text-xl text-navy mb-4">Direct Sale to Us</h4>
                    <p class="text-xs font-bold uppercase tracking-wider text-gold-dark mb-2">Pros</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Speed and
                                certainty</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>No repairs,
                                styling or open homes</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Private and
                                discreet</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>A timeline you
                                can plan around</span></li>
                    </ul>
                    <p class="text-xs font-bold uppercase tracking-wider text-ink/40 mt-5 mb-2">Cons</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>May sit below a
                                competitive open-market price</span></li>
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Subject to
                                assessment and suitability</span></li>
                    </ul>
                </div>
                <div class="card p-7 reveal"><span class="accent"></span>
                    <h4 class="font-display text-xl text-navy mb-4">Property Takeover</h4>
                    <p class="text-xs font-bold uppercase tracking-wider text-gold-dark mb-2">Pros</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>A pathway for
                                complex or stuck situations</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Hands over
                                ongoing cost and stress</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Clear,
                                documented terms</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Private and
                                respectful</span></li>
                    </ul>
                    <p class="text-xs font-bold uppercase tracking-wider text-ink/40 mt-5 mb-2">Cons</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Bespoke and subject
                                to assessment</span></li>
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Independent legal
                                advice strongly recommended</span></li>
                    </ul>
                </div>
                <div class="card p-7 reveal"><span class="accent"></span>
                    <h4 class="font-display text-xl text-navy mb-4">Renovate Now, Pay Later</h4>
                    <p class="text-xs font-bold uppercase tracking-wider text-gold-dark mb-2">Pros</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Can lift the
                                result where numbers stack up</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Targets
                                value-adding work</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Pay-later
                                options in some cases</span></li>
                    </ul>
                    <p class="text-xs font-bold uppercase tracking-wider text-ink/40 mt-5 mb-2">Cons</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Cost, time and
                                project risk</span></li>
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Uplift is never
                                guaranteed</span></li>
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Not suitable for
                                every property</span></li>
                    </ul>
                </div>
                <div class="card p-7 reveal"><span class="accent"></span>
                    <h4 class="font-display text-xl text-navy mb-4">Agent Sale</h4>
                    <p class="text-xs font-bold uppercase tracking-wider text-gold-dark mb-2">Pros</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Open-market
                                exposure</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Potential for
                                competitive offers</span></li>
                        <li class="flex gap-3 text-sm text-ink/75 leading-relaxed"><span
                                class="text-gold-dark mt-0.5 shrink-0" aria-hidden="true">✓</span><span>Agent manages
                                the campaign</span></li>
                    </ul>
                    <p class="text-xs font-bold uppercase tracking-wider text-ink/40 mt-5 mb-2">Cons</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Weeks of
                                preparation and open homes</span></li>
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>Commission and
                                marketing costs</span></li>
                        <li class="flex gap-3 text-sm text-ink/65 leading-relaxed"><span
                                class="text-ink/35 mt-0.5 shrink-0" aria-hidden="true">—</span><span>The outcome is
                                uncertain</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-6">
            <div class="reveal">
                <div class="card p-7 md:p-8"><span class="accent"></span>
                    <div class="mb-3"><span class="eyebrow">No-pressure assessment</span></div>
                    <h3 class="font-display text-2xl text-navy mb-1">Request a free property assessment</h3>
                    <p class="text-sm text-ink/65 mb-6">Tell us about your property and we will help you weigh up the
                        options.</p>
                    <form data-enquiry class="grid gap-4">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div><label class="lbl">Name</label><input class="field" name="name" required></div>
                            <div><label class="lbl">Phone</label><input class="field" name="phone" type="tel" required>
                            </div>
                        </div>
                        <div><label class="lbl">Property street &amp; suburb</label><input class="field" name="address"
                                placeholder="e.g. Smith St, Doncaster"></div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div><label class="lbl">Situation</label><select class="field" name="situation">
                                    <option>Selling as-is</option>
                                    <option>Renovate before sale</option>
                                    <option>Property takeover</option>
                                    <option>Other</option>
                                </select></div>
                            <div><label class="lbl">Timeline</label><select class="field" name="timeline">
                                    <option>ASAP</option>
                                    <option>1–3 months</option>
                                    <option>3–6 months</option>
                                    <option>Exploring</option>
                                </select></div>
                        </div>
                        <div class="flex items-start gap-2.5"><input id="consentS" type="checkbox"
                                class="mt-1 w-4 h-4 accent-[#A8752A]" name="consent" required><label for="consentS"
                                class="text-xs text-ink/70 leading-relaxed">I am the owner or an authorised person and
                                consent to be contacted. No obligation.</label></div><button
                            class="btn btn-gold w-full">Request a free assessment</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20"><img
                src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1600&q=80"
                onerror="this.onerror=null;this.src='https://placehold.co/1200x800/0B1F2A/C49A5A?text=Direct+Property+Buyer'"
                class="w-full h-full object-cover" alt=""></div>
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/95 to-navy/70"></div>
        <div class="relative max-w-5xl mx-auto px-6 py-20 md:py-24 text-center">
            <div class="mb-5"><span class="eyebrow light">Before you decide</span></div>
            <h2 class="font-display text-3xl md:text-[2.6rem] text-white leading-tight mb-5 max-w-3xl mx-auto">Not sure
                which option suits your situation?</h2>
            <p class="text-ivory/80 text-lg mb-9 max-w-2xl mx-auto">Send us a WhatsApp message and we will respond
                within 12 hours — no pressure, no obligation.</p>
            <div class="flex flex-wrap gap-3 justify-center"><a
                    href="https://wa.me/61421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I'd%20like%20a%20free%2C%20no-obligation%20property%20assessment."
                    target="_blank" rel="noopener" class="btn btn-gold">Message Us on WhatsApp</a><a href="contact.php"
                    data-link class="btn btn-light">Request Free Assessment</a></div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>