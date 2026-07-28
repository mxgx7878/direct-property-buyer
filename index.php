<?php
$page_title       = 'Direct Property Buyer | Sell Your Property Directly in Victoria';
$page_description = 'Sell your Victorian property directly — no repairs, no open homes, no pressure. As-is sales, renovate now pay later, property takeover and direct offers.';
$page_slug        = 'index';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="app">
      <section
        class="relative min-h-[90vh] lg:min-h-[86vh] bg-navy flex items-center overflow-hidden"
      >
        <div id="heroSlider" class="absolute inset-0">
          <div
            class="slide active"
            style="
              background-image: url(&quot;https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1800&q=80&quot;);
            "
          ></div>
          <div
            class="slide"
            style="
              background-image: url(&quot;https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1800&q=80&quot;);
            "
          ></div>
          <div
            class="slide"
            style="
              background-image: url(&quot;https://images.unsplash.com/photo-1582407947304-fd86f028f716?auto=format&fit=crop&w=1800&q=80&quot;);
            "
          ></div>
        </div>
        <div class="absolute inset-0 overlay-grad"></div>
        <div class="absolute inset-0 hero-vign opacity-70"></div>
        <div class="relative max-w-7xl mx-auto px-6 py-24 w-full">
          <div class="max-w-2xl">
            <span
              class="inline-flex items-center gap-2 text-[0.68rem] tracking-[0.2em] font-semibold text-gold-soft border border-gold/40 rounded-full px-4 py-1.5 mb-7 bg-rich/20"
              >Property Exit &amp; Value Maximisation | Victoria</span
            >
            <h1
              class="font-display text-white text-[2.5rem] sm:text-5xl lg:text-[3.6rem] leading-[1.05] mb-6"
            >
              Sell your property directly, without repairs, open homes or
              pressure.
            </h1>
            <p class="text-ivory/85 text-lg leading-relaxed mb-8 max-w-xl">
              Whether you need a fast sale, an as-is offer, or a practical plan
              before making your next move, we help Victorian property owners
              find a clear way forward.
            </p>
            <div class="flex flex-wrap gap-3 mb-10">
              <a href="contact.php" data-link class="btn btn-gold"
                >Request a Free Property Assessment</a
              ><a
                href="https://wa.me/0421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I'd%20like%20a%20free%2C%20no-obligation%20property%20assessment."
                target="_blank"
                rel="noopener"
                class="btn btn-light"
                >Message Us on WhatsApp</a
              >
            </div>
            <ul
              class="grid sm:grid-cols-2 gap-x-8 gap-y-3 text-sm text-ivory/85 max-w-xl"
            >
              <li class="flex gap-2">
                <span class="text-gold-soft" aria-hidden="true">✓</span> Sell
                your property as-is.
              </li>
              <li class="flex gap-2">
                <span class="text-gold-soft" aria-hidden="true">✓</span>
                Renovate now, pay later where the numbers stack up.
              </li>
              <li class="flex gap-2">
                <span class="text-gold-soft" aria-hidden="true">✓</span> Get
                help finding a home that better suits your needs.
              </li>
              <li class="flex gap-2 opacity-80">
                <span class="text-gold-soft" aria-hidden="true">✓</span> Explore
                selected property investment opportunities.
              </li>
            </ul>
          </div>
        </div>
        <div
          id="heroDots"
          class="absolute bottom-7 left-1/2 -translate-x-1/2 flex gap-2.5 z-10"
        >
          <button class="dot active" aria-label="Slide 1"></button
          ><button class="dot" aria-label="Slide 2"></button
          ><button class="dot" aria-label="Slide 3"></button>
        </div>
      </section>
      <section class="py-16 md:py-24 bg-white">
        <div class="max-w-5xl mx-auto px-6 text-center reveal">
          <div class="mb-4 flex justify-center">
            <span class="eyebrow">One property, several paths</span>
          </div>
          <h2
            class="font-display text-3xl md:text-[2.6rem] text-navy leading-tight mb-5"
          >
            Every owner’s situation is different.
          </h2>
          <p class="text-ink/70 text-lg leading-relaxed max-w-3xl mx-auto">
            Some owners need speed and certainty. Others may benefit from
            improving the property before sale. Some situations are more complex
            and need a practical exit strategy. Direct Property Buyer helps you
            compare your options before making a rushed decision.
          </p>
        </div>
      </section>
      <section class="py-16 md:py-24 bg-ivory">
        <div class="max-w-7xl mx-auto px-6">
          <div class="max-w-3xl mb-12 reveal">
            <div>
              <div class="mb-4"><span class="eyebrow">What we do</span></div>
              <h2
                class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4"
              >
                Three Practical Ways to Sell
              </h2>
              <p class="text-base md:text-lg text-ink/70 leading-relaxed">
                Each path suits a different situation. Explore the one that
                fits, or compare them side by side.
              </p>
            </div>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a
              href="direct-cash-offer.php"
              data-link
              class="card p-7 reveal block group"
              ><span class="accent"></span
              ><span class="ico mb-5" aria-hidden="true">$</span>
              <h3 class="font-display text-xl text-navy mb-2">
                Direct Cash Offer
              </h3>
              <p class="text-sm text-ink/70 leading-relaxed mb-5">
                A practical direct option where speed and certainty matter more
                than chasing the last dollar.
              </p>
              <span
                class="text-sm font-semibold text-gold-dark inline-flex items-center gap-1"
                >Learn more <span aria-hidden="true">→</span></span
              ></a
            ><a
              href="renovate-before-sale.php"
              data-link
              class="card p-7 reveal block group"
              ><span class="accent"></span
              ><span class="ico mb-5" aria-hidden="true">⌂</span>
              <h3 class="font-display text-xl text-navy mb-2">
                Renovate Now, Pay Later
              </h3>
              <p class="text-sm text-ink/70 leading-relaxed mb-5">
                Targeted improvements before sale — with pay-later arrangements
                where the numbers stack up.
              </p>
              <span
                class="text-sm font-semibold text-gold-dark inline-flex items-center gap-1"
                >Learn more <span aria-hidden="true">→</span></span
              ></a
            ><a
              href="property-takeover.php"
              data-link
              class="card p-7 reveal block group"
              ><span class="accent"></span
              ><span class="ico mb-5" aria-hidden="true">↻</span>
              <h3 class="font-display text-xl text-navy mb-2">
                Property Takeover
              </h3>
              <p class="text-sm text-ink/70 leading-relaxed mb-5">
                A structured pathway for complex, stuck or costly property
                situations.
              </p>
              <span
                class="text-sm font-semibold text-gold-dark inline-flex items-center gap-1"
                >Learn more <span aria-hidden="true">→</span></span
              ></a
            >
            <!-- <a
              href="compare-your-options.php"
              data-link
              class="card p-7 reveal block group"
              ><span class="accent"></span
              ><span class="ico mb-5" aria-hidden="true">≋</span>
              <h3 class="font-display text-xl text-navy mb-2">
                Compare Your Options
              </h3>
              <p class="text-sm text-ink/70 leading-relaxed mb-5">
                Not sure which path fits? See the trade-offs side by side before
                you decide.
              </p>
              <span
                class="text-sm font-semibold text-gold-dark inline-flex items-center gap-1"
                >Learn more <span aria-hidden="true">→</span></span
              ></a
            > -->
          </div>
        </div>
      </section>
 <?php
$cmp_eyebrow = 'Compare your options';
$cmp_heading = 'A clearer way to weigh it up';
$cmp_bg      = 'bg-white';
// $cmp_note    = 'Scores are general guidance only (0 = lowest, 5 = highest). Higher is better across every category.';
include __DIR__ . '/includes/comparison-table.php';
?>
      <section class="py-16 md:py-24 bg-ivory">
  <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
    <!-- Photo -->
    <div class="reveal">
      <div class="card overflow-hidden">
        <div class="aspect-[4/5] bg-navy">
          <!-- TODO: drop the client's photo in as /brad-ghasriani.jpg (keep this exact filename and every instance updates at once) -->
          <img src="assets\Brad-img.webp"
               alt="Brad Ghasriani, Founder of Direct Property Buyer"
               class="w-full h-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="font-display text-xl text-navy">Brad Ghasriani</h3>
          <p class="text-sm text-gold-dark font-semibold">Founder &middot; Direct Property Buyer</p>
        </div>
      </div>
    </div>
    <!-- Text -->
    <div class="reveal">
      <div class="mb-4"><span class="eyebrow">Our story</span></div>
      <h2 class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-5">A family business that treats your sale personally</h2>
      <div class="space-y-4 text-ink/75 text-base leading-relaxed">
        <p>Direct Property Buyer is a family-owned and family-run business, founded by Brad Ghasriani. It grew out of years of hands-on experience in property, renovation and construction &mdash; and a simple belief that selling a home should feel calm and considered, never rushed.</p>
        <p>Because we are a family business, every enquiry is handled personally. You deal directly with the people who make the decisions &mdash; not a call centre or a rotating cast of agents &mdash; and your situation is treated with genuine care and discretion.</p>
        <p>Our approach is to understand where you are first, then set out the realistic options &mdash; whether that is selling as-is, renovating before sale, or a direct offer. There is never any pressure to proceed, and your first property assessment is always free.</p>
      </div>
      <div class="flex flex-wrap gap-3 mt-8">
        <a href="contact.php" data-link class="btn btn-gold">Request a Free Property Assessment</a>
        <a href="https://wa.me/0421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I'd%20like%20a%20free%2C%20no-obligation%20property%20assessment." target="_blank" rel="noopener" class="btn btn-outline">Message Us on WhatsApp</a>
      </div>
    </div>
  </div>
</section>
      <section class="py-16 md:py-24 bg-navy">
        <div class="max-w-7xl mx-auto px-6">
          <div class="max-w-3xl mb-12 reveal">
            <div>
              <div class="mb-4">
                <span class="eyebrow light">Why consider us?</span>
              </div>
              <h2
                class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-white mb-4"
              >
                A calmer, more practical conversation
              </h2>
            </div>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <div
              class="bg-white/[0.04] border border-white/10 rounded-xl p-6 reveal"
            >
              <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
              <h3 class="font-display text-lg text-white mb-1.5">
                No-pressure property conversation
              </h3>
              <p class="text-ivory/65 text-sm leading-relaxed">
                Talk things through with no obligation to proceed.
              </p>
            </div>
            <div
              class="bg-white/[0.04] border border-white/10 rounded-xl p-6 reveal"
            >
              <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
              <h3 class="font-display text-lg text-white mb-1.5">
                Practical options before you decide
              </h3>
              <p class="text-ivory/65 text-sm leading-relaxed">
                See genuine alternatives, not a single fixed number.
              </p>
            </div>
            <div
              class="bg-white/[0.04] border border-white/10 rounded-xl p-6 reveal"
            >
              <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
              <h3 class="font-display text-lg text-white mb-1.5">
                Property &amp; renovation experience
              </h3>
              <p class="text-ivory/65 text-sm leading-relaxed">
                Hands-on knowledge of buildings, costs and value.
              </p>
            </div>
            <div
              class="bg-white/[0.04] border border-white/10 rounded-xl p-6 reveal"
            >
              <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
              <h3 class="font-display text-lg text-white mb-1.5">
                Direct, private &amp; respectful
              </h3>
              <p class="text-ivory/65 text-sm leading-relaxed">
                A discreet process that respects your situation.
              </p>
            </div>
            <div
              class="bg-white/[0.04] border border-white/10 rounded-xl p-6 reveal"
            >
              <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
              <h3 class="font-display text-lg text-white mb-1.5">
                Clear next steps
              </h3>
              <p class="text-ivory/65 text-sm leading-relaxed">
                You always know exactly what happens next.
              </p>
            </div>
            <div
              class="bg-white/[0.04] border border-white/10 rounded-xl p-6 reveal"
            >
              <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
              <h3 class="font-display text-lg text-white mb-1.5">
                Assessed case by case
              </h3>
              <p class="text-ivory/65 text-sm leading-relaxed">
                Suitable options matched to your specific property.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="py-16 md:py-24 bg-ivory">
        <div
          class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center"
        >
          <div class="reveal">
            <div>
              <div class="mb-4">
                <span class="eyebrow">What sets us apart</span>
              </div>
              <h2
                class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4"
              >
                Not only a cash buyer
              </h2>
            </div>
            <div class="mt-6 space-y-4 text-ink/75 leading-relaxed">
              <p>
                Brad’s background spans property, renovation, construction and
                project management — so we see a property practically, not just
                as a number on a page.
              </p>
              <p>
                That experience lets us solve real-world property problems,
                weigh up whether improvements stack up, and guide you toward the
                path that genuinely suits you.
              </p>
              <p>
                Most of all, we help owners compare their options before making
                a rushed decision.
              </p>
            </div>
            <div class="mt-7">
              <a href="about.php" data-link class="btn btn-outline btn-sm"
                >More about us</a
              >
            </div>
          </div>
          <div class="reveal grid grid-cols-2 gap-4">
            <div class="card p-6">
              <h4 class="font-display text-base text-navy mb-1">
                Property experience
              </h4>
              <p class="text-xs text-ink/60 leading-relaxed">
                Hands-on across residential property.
              </p>
            </div>
            <div class="card p-6">
              <h4 class="font-display text-base text-navy mb-1">
                Renovation know-how
              </h4>
              <p class="text-xs text-ink/60 leading-relaxed">
                What is worth fixing — and what is not.
              </p>
            </div>
            <div class="card p-6">
              <h4 class="font-display text-base text-navy mb-1">
                Project management
              </h4>
              <p class="text-xs text-ink/60 leading-relaxed">
                Complex situations handled clearly.
              </p>
            </div>
            <div class="card p-6">
              <h4 class="font-display text-base text-navy mb-1">
                Seller-focused
              </h4>
              <p class="text-xs text-ink/60 leading-relaxed">
                Guidance built around your goals.
              </p>
            </div>
          </div>
        </div>
      </section>
<section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-12 reveal">
                <div>
                    <div class="mb-4"><span class="eyebrow">Core values</span></div>
                    <h2 class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4">What guides how we work</h2>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="bg-ivory border border-line rounded-xl p-6 reveal">
                    <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
                    <h3 class="font-display text-lg text-navy mb-1">Integrity</h3>
                    <p class="text-sm text-ink/65">We believe in honesty, transparency, and ethical conduct in all our dealings.</p>
                </div>
                <div class="bg-ivory border border-line rounded-xl p-6 reveal">
                    <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
                    <h3 class="font-display text-lg text-navy mb-1">Client Focus</h3>
                    <p class="text-sm text-ink/65">Our clients&rsquo; needs and satisfaction are our top priority.</p>
                </div>
                <div class="bg-ivory border border-line rounded-xl p-6 reveal">
                    <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
                    <h3 class="font-display text-lg text-navy mb-1">Efficiency</h3>
                    <p class="text-sm text-ink/65">We strive to streamline our processes and deliver results in a timely manner.</p>
                </div>
                <div class="bg-ivory border border-line rounded-xl p-6 reveal">
                    <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
                    <h3 class="font-display text-lg text-navy mb-1">Innovation</h3>
                    <p class="text-sm text-ink/65">We continuously seek new and better ways to serve our clients and improve our business.</p>
                </div>
                <div class="bg-ivory border border-line rounded-xl p-6 reveal">
                    <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
                    <h3 class="font-display text-lg text-navy mb-1">Expertise</h3>
                    <p class="text-sm text-ink/65">We pride ourselves on our deep knowledge of the property market and our ability to provide expert guidance.</p>
                </div>
                <div class="bg-ivory border border-line rounded-xl p-6 reveal">
                    <div class="w-8 h-1 bg-gold rounded-full mb-4"></div>
                    <h3 class="font-display text-lg text-navy mb-1">Collaboration</h3>
                    <p class="text-sm text-ink/65">We believe in working together with our clients, partners, and tradespeople to achieve mutual success.</p>
                </div>
            </div>
        </div>
    </section>
      <section class="py-16 md:py-24 bg-ivory">
        <div class="max-w-7xl mx-auto px-6">
          <div class="max-w-3xl mb-10 reveal">
            <div>
              <div class="mb-4">
                <span class="eyebrow">Property situations we help with</span>
              </div>
              <h2
                class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4"
              >
                Whatever the circumstances
              </h2>
            </div>
          </div>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
            <a
              href="abandoned-property.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Abandoned Property</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="auction-preparation.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Auction Preparation</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="damaged-property.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Damaged Property</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="divorce-separation.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Divorce / Separation</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="failed-auction.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy">Failed Auction</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="hoarder-cluttered-property.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Hoarder / Cluttered</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="inherited-property.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Inherited Property</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="investment-property-exit.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Investment Property Exit</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="low-market-value.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Low Market Value</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="mortgage-pressure.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Mortgage Pressure</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="off-market-sale.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy">Off-Market Sale</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="pre-sale-renovation.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Pre-Sale Renovation</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="problem-tenants.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy">Problem Tenants</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="property-renovation.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Property Renovation</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="property-styling.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Property Styling</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="relocation.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy">Relocation</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="retirement-downsizing.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Retirement / Downsizing</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="sell-without-an-agent.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Sell Without an Agent</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="unfinished-renovation.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Unfinished Renovation</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="urgent-sale.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Need to Sell Quickly</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="vacant-property.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy">Vacant Property</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="value-maximisation.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy"
                >Value Maximisation</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            ><a
              href="deceased-estate.php"
              data-link
              class="group flex items-center justify-between gap-2 bg-white border border-line rounded-xl px-4 py-3.5 hover:border-gold hover:shadow-soft transition reveal"
              ><span class="text-sm font-medium text-navy">Deceased Estate</span
              ><span
                class="text-gold-dark opacity-0 group-hover:opacity-100 transition"
                aria-hidden="true"
                >→</span
              ></a
            >
          </div>
        </div>
      </section>
      <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
          <div
            class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10"
          >
            <div>
              <div class="mb-4">
                <span class="eyebrow">Property Knowledge Centre</span>
              </div>
              <h2
                class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4"
              >
                Practical guides for real decisions
              </h2>
              <p class="text-base md:text-lg text-ink/70 leading-relaxed">
                Subscribe to our practical property guides and stay up to date
                with helpful property insights.
              </p>
            </div>
            <a
              href="property-guides.php"
              data-link
              class="btn btn-outline btn-sm shrink-0"
              >View all guides</a
            >
          </div>
          <div class="mb-7">
            <input
              class="field max-w-md"
              placeholder="Search guides (e.g. failed auction)"
            />
          </div>
          <div class="flex flex-wrap gap-2 mb-9">
            <span class="chip">Selling As-Is</span
            ><span class="chip">Renovating Before Sale</span
            ><span class="chip">Deceased Estates</span
            ><span class="chip">Mortgage Pressure</span
            ><span class="chip">Failed Auction</span
            ><span class="chip">Problem Tenants</span>
          </div>
          <div class="grid md:grid-cols-3 gap-6 mb-12">
            <a
              href="sell-as-is-or-renovate-first.php"
              data-link
              class="card overflow-hidden reveal block group"
              ><div class="h-44 bg-navy overflow-hidden">
                <img
                  src="https://images.unsplash.com/photo-1556909212-d5b604d0c90d?auto=format&fit=crop&w=800&q=80"
                  onerror="
                    this.onerror = null;
                    this.src =
                      'https://placehold.co/1200x800/0B1F2A/C49A5A?text=Direct+Property+Buyer';
                  "
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                  alt=""
                />
              </div>
              <div class="p-6">
                <span
                  class="text-[0.68rem] uppercase tracking-wider font-bold text-gold-dark"
                  >Selling As-Is</span
                >
                <h4
                  class="font-display text-lg text-navy mt-2 mb-2 leading-snug"
                >
                  Should I sell my house as-is or renovate first?
                </h4>
                <p class="text-sm text-ink/65 leading-relaxed">
                  A simple framework for deciding when improvements are worth it
                  — and when they are not.
                </p>
              </div></a
            ><a
              href="auction-failed-victoria-next-steps.php"
              data-link
              class="card overflow-hidden reveal block group"
              ><div class="h-44 bg-navy overflow-hidden">
                <img
                  src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=800&q=80"
                  onerror="
                    this.onerror = null;
                    this.src =
                      'https://placehold.co/1200x800/0B1F2A/C49A5A?text=Direct+Property+Buyer';
                  "
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                  alt=""
                />
              </div>
              <div class="p-6">
                <span
                  class="text-[0.68rem] uppercase tracking-wider font-bold text-gold-dark"
                  >Failed Auction</span
                >
                <h4
                  class="font-display text-lg text-navy mt-2 mb-2 leading-snug"
                >
                  What to do if your auction failed in Victoria
                </h4>
                <p class="text-sm text-ink/65 leading-relaxed">
                  Practical next steps after a passed-in or quiet campaign,
                  without losing momentum.
                </p>
              </div></a
            ><a
              href="sell-deceased-estate-victoria.php"
              data-link
              class="card overflow-hidden reveal block group"
              ><div class="h-44 bg-navy overflow-hidden">
                <img
                  src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?auto=format&fit=crop&w=800&q=80"
                  onerror="
                    this.onerror = null;
                    this.src =
                      'https://placehold.co/1200x800/0B1F2A/C49A5A?text=Direct+Property+Buyer';
                  "
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                  alt=""
                />
              </div>
              <div class="p-6">
                <span
                  class="text-[0.68rem] uppercase tracking-wider font-bold text-gold-dark"
                  >Deceased Estates</span
                >
                <h4
                  class="font-display text-lg text-navy mt-2 mb-2 leading-snug"
                >
                  How to sell a deceased estate property in Victoria
                </h4>
                <p class="text-sm text-ink/65 leading-relaxed">
                  A respectful, step-by-step overview for executors and
                  families.
                </p>
              </div></a
            >
          </div>
          <div
            class="bg-navy rounded-2xl p-8 md:p-10 flex flex-col md:flex-row md:items-center gap-6 justify-between"
          >
            <div>
              <h4 class="font-display text-2xl text-white mb-1">
                Stay a step ahead
              </h4>
              <p class="text-ivory/70 text-sm max-w-md">
                Practical property insights, occasionally. No spam, unsubscribe
                anytime.
              </p>
            </div>
            <form
              data-news
              class="flex flex-col sm:flex-row gap-3 w-full md:w-auto"
            >
              <input
                class="field sm:w-64"
                placeholder="Your email"
                type="email"
                required
              /><button class="btn btn-gold whitespace-nowrap">
                Subscribe
              </button>
              <p
                data-news-msg
                class="hidden text-gold-soft text-sm self-center"
              ></p>
            </form>
          </div>
        </div>
      </section>
      <section class="relative bg-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20">
          <img
            src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1600&q=80"
            onerror="
              this.onerror = null;
              this.src =
                'https://placehold.co/1200x800/0B1F2A/C49A5A?text=Direct+Property+Buyer';
            "
            class="w-full h-full object-cover"
            alt=""
          />
        </div>
        <div
          class="absolute inset-0 bg-gradient-to-r from-navy via-navy/95 to-navy/70"
        ></div>
        <div class="relative max-w-5xl mx-auto px-6 py-20 md:py-24 text-center">
          <div class="mb-5">
            <span class="eyebrow light">Before you decide</span>
          </div>
          <h2
            class="font-display text-3xl md:text-[2.6rem] text-white leading-tight mb-5 max-w-3xl mx-auto"
          >
            Not sure which option suits your situation?
          </h2>
          <p class="text-ivory/80 text-lg mb-9 max-w-2xl mx-auto">
            Request a free property assessment and we will respond within 12 hours — no
            pressure, no obligation.
          </p>
          <div class="flex flex-wrap gap-3 justify-center">
            <a
              href="https://wa.me/0421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I'd%20like%20a%20free%2C%20no-obligation%20property%20assessment."
              target="_blank"
              rel="noopener"
              class="btn btn-gold"
              >Message Us on WhatsApp</a
            ><a href="contact.php" data-link class="btn btn-light"
              >Request Free Assessment</a
            >
          </div>
        </div>
      </section>
      <section class="py-16 md:py-24 bg-ivory">
        <div
          class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-start"
        >
          <div class="reveal">
            <div>
              <div class="mb-4">
                <span class="eyebrow">Request a free property assessment</span>
              </div>
              <h2
                class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4"
              >
                Tell us about your property
              </h2>
              <p class="text-base md:text-lg text-ink/70 leading-relaxed">
                Share a few details and we will be in touch within 12 hours. No
                obligation, ever.
              </p>
            </div>
            <div class="mt-8 space-y-4">
              <div class="flex gap-4 items-start">
                <span class="ico ico-ghost" aria-hidden="true">◷</span>
                <div>
                  <h4 class="font-semibold text-navy text-sm">Fast response</h4>
                  <p class="text-sm text-ink/60">
                    We typically reply within 12 hours.
                  </p>
                </div>
              </div>
              <div class="flex gap-4 items-start">
                <span class="ico ico-ghost" aria-hidden="true">◆</span>
                <div>
                  <h4 class="font-semibold text-navy text-sm">No obligation</h4>
                  <p class="text-sm text-ink/60">
                    A free assessment with no pressure to proceed.
                  </p>
                </div>
              </div>
              <div class="flex gap-4 items-start">
                <span class="ico ico-ghost" aria-hidden="true">☉</span>
                <div>
                  <h4 class="font-semibold text-navy text-sm">Private</h4>
                  <p class="text-sm text-ink/60">
                    Your details are used only for your enquiry.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="reveal">
            <div class="card p-7 md:p-9">
              <span class="accent"></span>
              <form data-enquiry class="grid sm:grid-cols-2 gap-4">
                <div>
                  <label class="lbl">Full name</label
                  ><input class="field" name="name" required />
                </div>
                <div>
                  <label class="lbl">Phone</label
                  ><input class="field" name="phone" type="tel" required />
                </div>
                <div>
                  <label class="lbl">Email</label
                  ><input class="field" name="email" type="email" />
                </div>
                <div>
                  <label class="lbl">Property street &amp; suburb</label
                  ><input
                    class="field"
                    name="address"
                    placeholder="e.g. Smith St, Doncaster"
                  />
                </div>
                <div>
                  <label class="lbl">Owner or authorised person?</label
                  ><select class="field" name="owner">
                    <option>Owner</option>
                    <option>Executor / authorised person</option>
                    <option>Enquiring for family</option>
                    <option>Other</option>
                  </select>
                </div>
                <div>
                  <label class="lbl">Property condition</label
                  ><select class="field" name="condition">
                    <option>Excellent</option>
                    <option>Good</option>
                    <option>Needs some work</option>
                    <option>Significant repairs needed</option>
                    <option>Not sure</option>
                  </select>
                </div>
                <div>
                  <label class="lbl">Your situation</label
                  ><select class="field" name="situation">
                    <option>Selling as-is</option>
                    <option>Renovate before sale</option>
                    <option>Property takeover</option>
                    <option>Deceased estate</option>
                    <option>Mortgage pressure</option>
                    <option>Failed auction</option>
                    <option>Downsizing / retirement</option>
                    <option>Just exploring</option>
                    <option>Other</option>
                  </select>
                </div>
                <div>
                  <label class="lbl">Timeline</label
                  ><select class="field" name="timeline">
                    <option>As soon as possible</option>
                    <option>1–3 months</option>
                    <option>3–6 months</option>
                    <option>Just exploring</option>
                  </select>
                </div>
                <div class="sm:col-span-2">
                  <label class="lbl">Message (optional)</label
                  ><textarea
                    class="field"
                    name="message"
                    rows="3"
                    placeholder="Anything you would like us to know"
                  ></textarea>
                </div>
                <div class="sm:col-span-2 flex items-start gap-2.5">
                  <input
                    id="consentF"
                    type="checkbox"
                    class="mt-1 w-4 h-4 accent-[#A8752A]"
                    name="consent"
                    required
                  /><label
                    for="consentF"
                    class="text-xs text-ink/70 leading-relaxed"
                    >I confirm I am the owner or an authorised person, and I
                    give permission to be contacted about this enquiry. This is
                    a no-obligation request.</label
                  >
                </div>
                <div class="sm:col-span-2">
                  <button class="btn btn-gold w-full sm:w-auto">
                    Request my free assessment
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
