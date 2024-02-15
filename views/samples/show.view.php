<?php

require base_path('views/elements/head.php');
require base_path('views/elements/nav.php');

?>

<main class="flex justify-center items-center mt-8 mb-4">

  <style>
    .sample-card {
        display: flex;
        margin-bottom: 20px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
    }

    .sample-card .info {
        flex: 1;
        padding: 20px;
    }

    .sample-card .image {
        width: 100px; /* Adjust width as needed */
        flex-shrink: 0;
        padding: 20px;
    }

    .youtube-embed {
        margin-top: 20px;
    }
  </style>

  <div class="container mx-auto flex flex-col items-center">

    <!-- Sample Card 1 -->
    <div class="sample-card">
      <div class="info">
        <h2 class="text-lg font-bold"><?= $sample['song_name'] ?></h2>
        <p class="text-gray-600">Artist: <?= $sample['artist_name'] ?></p>
        <p class="text-gray-600">Album: <?= $sample['album_name'] ?? 'Unreleased' ?></p>
        <?php if (isset($sample['song_link'])): ?>
        <div class="youtube-embed">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $sample['song_link'] ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Sample Type Image -->
    <div class="my-10">
      <img src="images/drums.png" width="50" height="50" alt="Sample type">
    </div>

    <!-- Sample Card 2 -->
    <div class="sample-card">
      <div class="info">
        <h2 class="text-lg font-bold"><?= $sample['sampled_song'] ?></h2>
        <p class="text-gray-600">Artist: <?= $sample['sampled_artist'] ?></p>
        <p class="text-gray-600">Album: <?= $sample['sampled_album'] ?? 'Unreleased' ?></p>
        <?php if (isset($sample['sample_link'])): ?>
        <div class="youtube-embed">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $sample['sample_link'] ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <?php endif; ?>
      </div>
    </div>

  </div>
</main>


<?php require base_path('views/elements/footer.php'); ?>