<?php
/**
 * Reusable "Compare your options" component.
 * Include it from any page:  include __DIR__ . '/includes/comparison-table.php';
 *
 * Optional per-page overrides — set BEFORE the include:
 *   $cmp_eyebrow, $cmp_heading, $cmp_bg (e.g. 'bg-white' / 'bg-ivory'), $cmp_note
 *
 * ─────────────────────────────────────────────────────────────
 *  EDIT RATINGS HERE — one place updates all pages.
 *  Each value is 0–5 (number of filled pips out of 5).
 *  NOTE: these are placeholder scores. Replace them with the exact
 *  values from the reference image.
 * ─────────────────────────────────────────────────────────────
 */
$cmp_categories = ['Speed', 'Certainty', 'Hassle Free', 'Privacy', 'Potential Resale Value'];
 
$cmp_methods = [
    [
        'name'   => 'Direct Sale to Us',
        'badge'  => 'Most direct',
        'ratings'=> ['Speed'=>5, 'Certainty'=>5, 'Hassle Free'=>5, 'Privacy'=>5, 'Potential Resale Value'=>3],
    ],
    [
        'name'   => 'Property Takeover',
        'badge'  => '',
        'ratings'=> ['Speed'=>4, 'Certainty'=>5, 'Hassle Free'=>4, 'Privacy'=>5, 'Potential Resale Value'=>5],
    ],
    [
        'name'   => 'Renovate Now, Pay Later',
        'badge'  => '',
        'ratings'=> ['Speed'=>2, 'Certainty'=>4, 'Hassle Free'=>3, 'Privacy'=>4, 'Potential Resale Value'=>5],
    ],
    [
        'name'   => 'Agent Sale',
        'badge'  => '',
        'ratings'=> ['Speed'=>2, 'Certainty'=>2, 'Hassle Free'=>2, 'Privacy'=>2, 'Potential Resale Value'=>4],
    ],
];
 
$cmp_eyebrow = $cmp_eyebrow ?? 'Compare your options';
$cmp_heading = $cmp_heading ?? 'A clearer way to weigh it up';
$cmp_bg      = $cmp_bg      ?? 'bg-white';
$cmp_note    = $cmp_note    ?? 'Scores are general guidance only (0 = lowest, 5 = highest).';
?>
<section class="py-16 md:py-24 <?= $cmp_bg ?>">
  <div class="max-w-7xl mx-auto px-6">
    <div class="max-w-3xl mb-10 reveal">
      <div class="mb-4"><span class="eyebrow"><?= $cmp_eyebrow ?></span></div>
      <h2 class="font-display text-3xl md:text-[2.5rem] leading-[1.12] text-navy mb-4"><?= $cmp_heading ?></h2>
    </div>
    <div class="flex gap-4 overflow-x-auto pb-3 snap-x lg:grid lg:grid-cols-4 lg:gap-5 lg:overflow-visible">
      <?php foreach ($cmp_methods as $m): ?>
      <div class="card p-6 min-w-[230px] snap-start reveal<?= $m['badge'] !== '' ? ' ring-1 ring-gold/40' : '' ?>">
        <?php if ($m['badge'] !== ''): ?>
        <span class="inline-block text-[0.62rem] tracking-wider uppercase font-bold text-gold-dark bg-gold/10 rounded-full px-3 py-1 mb-3"><?= $m['badge'] ?></span>
        <?php else: ?>
        <span class="block h-[26px]"></span>
        <?php endif; ?>
        <h4 class="font-display text-lg text-navy mb-4"><?= $m['name'] ?></h4>
        <?php foreach ($cmp_categories as $cat): $val = (int)($m['ratings'][$cat] ?? 0); ?>
        <div class="mb-3 last:mb-0">
          <span class="text-xs font-semibold text-ink/70 block mb-1.5"><?= $cat ?></span>
          <span class="meter"><?php for ($i = 1; $i <= 5; $i++): ?><span class="<?= $i <= $val ? 'on' : '' ?>"></span><?php endfor; ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <?php if ($cmp_note !== ''): ?>
    <p class="text-xs text-ink/50 mt-5 max-w-2xl"><?= $cmp_note ?></p>
    <?php endif; ?>
  </div>
</section>