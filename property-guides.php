<?php
$page_title       = 'Property Knowledge Centre | Direct Property Buyer';
$page_description = 'Practical, plain-English property guides — from selling as-is to navigating a failed auction — to help you make confident decisions.';
$page_slug        = 'property-guides';
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
                    class="hover:text-gold-soft">Home</a> <span>&rsaquo;</span> <span class="text-ivory/80">Property
                    Guides</span></nav>
            <div class="mb-5"><span class="eyebrow light">Property Knowledge Centre</span></div>
            <h1
                class="font-display text-white text-[2.2rem] sm:text-4xl lg:text-[3.1rem] leading-[1.08] max-w-3xl mb-5">
                Property Knowledge Centre</h1>
            <p class="text-ivory/85 text-lg leading-relaxed max-w-2xl mb-8">Practical, plain-English guides to help you
                make confident property decisions — from selling as-is to navigating a failed auction.</p>
            <div class="flex flex-wrap gap-3"><a href="contact.php" data-link class="btn btn-gold">Request a Free
                    Property Assessment</a><a
                    href="https://wa.me/0421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I'd%20like%20a%20free%2C%20no-obligation%20property%20assessment."
                    target="_blank" rel="noopener" class="btn btn-light">Message Us on WhatsApp</a></div>
        </div>
    </section>

    <!-- Blog feed (powered by SORO) -->
    <section class="py-14 md:py-20 bg-ivory">
        <div class="max-w-5xl mx-auto px-6">
            <div class="mb-9 max-w-2xl">
                <span class="eyebrow">Latest</span>
                <h2 class="font-display text-2xl md:text-[2rem] text-navy mt-3 mb-2 leading-tight">Latest articles &amp; guides</h2>
                <p class="text-ink/65 leading-relaxed">Practical property insights from our team — added regularly.</p>
            </div>
            <div id="soro-feed">
                <?php require __DIR__ . '/includes/soro-blog.php'; ?>
            </div>
            <div id="soro-search-wrap" class="mb-6 hidden">
              <input id="soro-search" type="search" placeholder="Search guides…"
                class="w-full rounded-xl border border-navy/15 bg-white px-4 py-3 text-ink
                       focus:outline-none focus:ring-2 focus:ring-gold-soft/60" />
              <p id="soro-search-empty" class="hidden text-ink/60 text-sm mt-3">
                No guides match your search.
              </p>
            </div>

            <!-- General-information disclaimer — sits below the SORO feed -->
            <div id="guides-disclaimer"
                 class="bg-white border border-line rounded-2xl p-6 mt-10 max-w-3xl mx-auto">
                <p class="text-sm text-ink/70 leading-relaxed">
                    <span class="font-semibold text-navy">A reminder:</span> these guides are general
                    information only and not legal, financial or tax advice. Every situation is
                    different — we recommend obtaining independent professional advice before making
                    important property decisions.
                </p>
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
            <p class="text-ivory/80 text-lg mb-9 max-w-2xl mx-auto">Request a free property assessment and we will
                respond within 12 hours — no pressure, no obligation.</p>
            <div class="flex flex-wrap gap-3 justify-center"><a href="contact.php" data-link
                    class="btn btn-gold">Request a Free Property Assessment</a><a
                    href="https://wa.me/0421300305?text=Hi%20Direct%20Property%20Buyer%2C%20I'd%20like%20a%20free%2C%20no-obligation%20property%20assessment."
                    target="_blank" rel="noopener" class="btn btn-light">Message Us on WhatsApp</a></div>
        </div>
    </section>
</main>

<style>
/* --- Frame the SORO feed so it matches the site --------------------------- */
/* SORO controls the card markup; these are safe nudges that improve it where
   they apply and harmlessly do nothing where they don't. */
#soro-feed #soro-blog { max-width: 56rem; margin-inline: auto; }

/* Brand serif for post titles */
#soro-feed h1, #soro-feed h2, #soro-feed h3 {
    font-family: "Fraunces", Georgia, serif;
    color: #0B1F2A;
}

/* Rounded post thumbnails */
#soro-feed img { border-radius: 0.85rem; }

/* Card-ish blocks get a gentle hover lift */
#soro-feed article,
#soro-feed [class*="card"],
#soro-feed [class*="post"] {
    transition: transform .3s ease, box-shadow .3s ease;
}
#soro-feed article:hover,
#soro-feed [class*="card"]:hover,
#soro-feed [class*="post"]:hover {
    transform: translateY(-2px);
    box-shadow: 0 18px 40px -18px rgba(11, 31, 42, .35);
}

/* Keep the disclaimer clear of the feed even if SORO injects its own margins */
#guides-disclaimer { clear: both; }
</style>

<script>
(function () {
  const feed    = document.getElementById('soro-blog');
  const section = document.getElementById('soro-feed');
  const wrap    = document.getElementById('soro-search-wrap');
  if (!feed || !section || !wrap) return;

  // Move the search box ABOVE the feed, once.
  section.parentNode.insertBefore(wrap, section);

  // Find the container whose children are the repeated post cards,
  // instead of relying on a fixed class selector.
  function findCards(root) {
    let best = [], bestCount = 0;
    const nodes = [root, ...root.querySelectorAll('*')];
    for (const el of nodes) {
      const kids = Array.from(el.children).filter(k =>
        k.querySelector('h1,h2,h3,h4,img') && k.textContent.trim().length > 25
      );
      // Pick the grouping with the MOST card-like siblings (the post list,
      // not a 2-child header/body wrapper).
      if (kids.length >= 2 && kids.length > bestCount) {
        bestCount = kids.length;
        best = kids;
      }
    }
    return best;
  }

  function wireSearch() {
    const cards = findCards(feed);
    if (!cards.length) return false; // SORO hasn't rendered yet

    wrap.classList.remove('hidden');
    const input = document.getElementById('soro-search');
    const empty = document.getElementById('soro-search-empty');

    function run() {
      const q = input.value.trim().toLowerCase();
      let visible = 0;
      cards.forEach(card => {
        const match = !q || card.textContent.toLowerCase().includes(q);
        card.style.display = match ? '' : 'none';
        if (match) visible++;
      });
      empty.classList.toggle('hidden', visible !== 0);
    }

    input.removeEventListener('input', run);
    input.addEventListener('input', run);
    return true;
  }

  if (!wireSearch()) {
    const obs = new MutationObserver(() => wireSearch());
    obs.observe(feed, { childList: true, subtree: true });
    setTimeout(() => obs.disconnect(), 15000);
  }
})();
</script>
<?php require __DIR__ . '/includes/footer.php'; ?>