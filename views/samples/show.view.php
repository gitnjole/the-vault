<?php

require base_path('views/elements/head.php');
require base_path('views/elements/nav.php');
require base_path('views/elements/banner.php');

?>
<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
  <section>
    <?php //require 'views/elements/table.php'; ?>
    <p>
      <a class="font-semibold leading-6 text-grey-600 hover:text-indigo-500" href="/samples">Go back</a>
    </p>

    <p>
      <?= $sample['artist']. '<br>' .$sample['sample']. '<br>' .$sample['stamp'] ?>
    </p>
  </section>
</div>
</main>

<?php require base_path('views/elements/footer.php'); ?>