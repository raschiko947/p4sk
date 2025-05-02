<?php
$db = new PDO('mysql:host=localhost;dbname=dasda', 'root', '');
$anggota = $db->query("SELECT * FROM anggota")->fetchAll(PDO::FETCH_ASSOC);
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Anggota - P4SK</title>


  <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 20px;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background: #fff;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background: #6a11cb;
            background: linear-gradient(to right, #2575fc, #6a11cb);
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
            transform: scale(1.02);
            transition: 0.3s;
        }

        .form-container {
            margin: 30px auto;
            width: 50%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            animation: fadeIn 1.5s ease-in;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 5px;
            transition: 0.3s;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 8px #6a11cb;
        }

        button {
            padding: 10px 20px;
            background: linear-gradient(to right, #2575fc, #6a11cb);
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: transform 0.2s;
        }

        button:hover {
            transform: scale(1.1);
        }
    </style>

</head>
<body class="bg-gray-100">
  <div class="max-w-7xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Data Anggota</h1>

    <!-- Ini Flex buat 2 form tombol disamping -->

    <!-- Tabel Data Anggota -->
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
