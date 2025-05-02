<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo / Brand -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold text-blue-600">P4SK</a>
                </div>

                <!-- Menu (desktop) -->
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Beranda</a>
                    <a href="DataAnggota.php" class="text-gray-700 hover:text-blue-600 font-medium">Data Anggota</a>
                    <a href="tambah-anggota.php" class="text-gray-700 hover:text-blue-600 font-medium">Tambah Anggota</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Tentang</a>
                </nav>

                <!-- Hamburger (mobile) -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-700 focus:outline-none focus:text-blue-600">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Beranda</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Data Anggota</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Tambah Anggota</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Tentang</a>
        </div>
    </header>

    <script>
        const toggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</body>
</html>