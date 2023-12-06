<?php
/* $heading = 'NOT FOUND';
require basePath('views/elements/head.php');
require basePath('views/elements/nav.php');
require basePath('views/elements/banner.php'); */
?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p> Page not found, you searched for: <?= $_SERVER['REQUEST_URI']; ?></p>
      <p> <a href="/">Go back to home</a></p>
    </div>
  </main>

<?php /* require basePath('views/elements/footer.php');  */?>