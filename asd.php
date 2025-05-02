<?php
$db = new PDO('mysql:host=localhost;dbname=dasda', 'root', '');
$anggota = $db->query("SELECT * FROM anggota")->fetchAll(PDO::FETCH_ASSOC);
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Data Anggota - P4SK</title>
  <>
    <meta charset="UTF-8">
    <title>Menu Fakultas</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0f0f0;
        }

        .sidebar {
            width: 250px;
            background-color: #4B2E83;
            color: white;
            padding: 20px;
            height: 100vh;
        }

        .menu-item {
            cursor: pointer;
            padding: 10px 5px;
            font-weight: bold;
            position: relative;
        }

        .menu-item:hover {
            background-color: #5a38a1;
        }

        .arrow {
            float: right;
        }

        .submenu {
            display: none;
            padding-left: 15px;
            margin-bottom: 10px;
        }

        .submenu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 5px 0;
        }

        .submenu a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-gray-100">
  <div class="max-w-7xl mx-auto py-10 px-4">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-3xl font-bold text-gray-800">Data Anggota</h1>
      <a href="tambah-anggota.php"
         class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
        + Tambah Anggota
      </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Wilayah</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIA</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php 
          for ($i = 0; $i < count($anggota) && $i < 10; $i++): ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($anggota[$i]['id']) ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($anggota[$i]['nama']) ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($anggota[$i]['id_wilayah']) ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($anggota[$i]['status']) ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($anggota[$i]['keterangan']) ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($anggota[$i]['NIA']) ?></td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>
    </div>
  </div>
<script>
        function toggleMenu(element) {
            const next = element.nextElementSibling;
            const arrow = element.querySelector('.arrow');
            if (next && next.classList.contains('submenu')) {
                next.style.display = (next.style.display === 'block') ? 'none' : 'block';
                arrow.textContent = (next.style.display === 'block') ? '▲' : '▼';
            }
        }
    </script>

</body>
</html>
