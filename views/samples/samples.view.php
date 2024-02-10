<?php

require base_path('views/elements/head.php');
require base_path('views/elements/nav.php');
require base_path('views/elements/banner.php');

?>
<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
  <section>
    <?php //require 'views/elements/table.php'; ?>
    <?php foreach ($samples as $sample) : ?>
      <li>
        <a href="/sample?id=<?= $sample['id'] ?>">
            <?= $sample['song_name']. ' by ' .$sample['artist'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </section>
</div>
</main>

<?php require base_path('views/elements/footer.php'); ?>