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
        <form method="POST" action="/sample">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $sample['id'] ?>">

            <label for="sample">Sample:</label>
            <input type="text" name="sample" value="<?= $sample['sample'] ?? '' ?>">
            <?php if (isset($errors)) : ?>
              <p class="mt-3 text-sm font-bold leading-6 text-red-600"><?php foreach($errors as $error) {
                    echo $error. "<br>";
                }?></p>
            <?php else: ?>
                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
            <?php endif; ?>
            <br>
            <button type="submit">Update</button>
        </form>
    </p>
  </section>
</div>
</main>

<?php require base_path('views/elements/footer.php'); ?>