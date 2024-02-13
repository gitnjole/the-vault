<?php require base_path('views/elements/head.php'); ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="" src="images/inferno.jpg" alt="Inferno Productions logo">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/session" method="POST">
      <div>
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
        <div class="mt-2">
        <input id="username" name="username" placeholder="25 characters maximum." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-900 sm:text-sm sm:leading-6">
        <?php if (isset($errors['username'])) : ?>
            <p class="mt-3 text-sm font-bold leading-6 text-red-600"><?php echo $errors['username']; ?></p>
        <?php endif; ?>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" placeholder="8 characters minimum." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-900 sm:text-sm sm:leading-6">
        </div>
        <?php if (isset($errors['password'])) : ?>
            <p class="mt-3 text-sm font-bold leading-6 text-red-600"><?php echo $errors['password']; ?></p>
        <?php endif; ?>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-amber-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-yellow-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-900">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Misclick?
      <a href="/" class="font-semibold leading-6 text-amber-900 hover:text-yellow-950">Go back!</a>
    </p>
  </div>
</div>
</div>
<?php require base_path('views/elements/footer.php'); ?>