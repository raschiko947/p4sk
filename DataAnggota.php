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
</head>
</

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
</body>
</html>
