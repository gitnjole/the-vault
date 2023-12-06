<?php
$heading = 'NOT AUTHORIZED';
require basePath('views/elements/head.php');
require basePath('views/elements/nav.php');
require basePath('views/elements/banner.php');
?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p> You are not authorized to view this blog, are you the correct owner of the blog?</p>
      <p> <a href="/blogs">Go back</a></p>
    </div>
  </main>

<?php require basePath('views/elements/footer.php'); ?>


