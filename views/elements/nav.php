<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
          </div>
          <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">

            <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300';?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
            <a href="/samples" class="<?= urlIs('/samples') ? 'bg-gray-900 text-white' : 'text-gray-300';?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Samples</a>
            <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300';?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">What is this?</a>
            <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300';?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>

          </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
              <?php if ($_SESSION['user'] ?? false) : ?>
                <form action="/session" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md mt--4 px-3 py-2 text-sm font-medium">Log out</button>
                </form>
            <?php endif; ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>