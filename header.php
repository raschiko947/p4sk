<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar Modern</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .active {
      @apply text-white bg-blue-600 rounded px-3 py-1;
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Navbar -->
  <header class="bg-gradient-to-r from-green-800 to-blue-900 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="#" class="text-3xl font-bold text-white tracking-wide">P4SK</a>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-6">
          <a href="#" class="text-white hover:text-yellow-300 font-medium transition">Beranda</a>
          <a href="DataAnggota.php" class="text-white hover:text-yellow-300 font-medium transition">Data Anggota</a>
          <a href="tambah-anggota.php" class="text-white hover:text-yellow-300 font-medium transition">Tambah Anggota</a>
          <a href="#" class="text-white hover:text-yellow-300 font-medium transition">Tentang</a>
        </nav>

        <!-- Hamburger Button -->
        <div class="md:hidden">
          <button id="menu-toggle" class="text-white focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
      <a href="#" class="block text-white bg-blue-700 rounded px-3 py-2 hover:bg-blue-800 transition">Beranda</a>
      <a href="DataAnggota.php" class="block text-white hover:bg-blue-800 px-3 py-2 rounded transition">Data Anggota</a>
      <a href="tambah-anggota.php" class="block text-white hover:bg-blue-800 px-3 py-2 rounded transition">Tambah Anggota</a>
      <a href="#" class="block text-white hover:bg-blue-800 px-3 py-2 rounded transition">Tentang</a>
    </div>
  </header>

  <!-- Script Toggle Menu -->
  <script>
    const toggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    toggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
