<?php

require base_path('views/elements/head.php');
require base_path('views/elements/nav.php');
require base_path('views/elements/banner.php');

?>
<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
  <section>
    <a href="/sample/create"> create a sample </a>
  </section>
  <section>
    <?php require base_path('views/elements/table.php'); ?>
  </section>
</div>
</main>

<?php require base_path('views/elements/footer.php'); ?>