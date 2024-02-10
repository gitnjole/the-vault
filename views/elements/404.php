<?php
$heading = 'NOT FOUND';
require base_path('views/elements/head.php');
require base_path('views/elements/nav.php');
?>
  <header class="bg-red-400 shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl text-center font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
      </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p> Page not found, you searched for: <?= $_SERVER['REQUEST_URI']; ?></p>
      <p> <a href="/">Go back to home</a></p>
    </div>
  </main>

<?php require base_path('views/elements/footer.php'); ?>