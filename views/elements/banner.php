<header class="<?= in_array(http_response_code(), [404, 403]) ? 'bg-gray-900 text-white' : 'bg-white shadow';?>">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl text-center font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
    </div>
</header>
