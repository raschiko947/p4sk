<?php
$db = new PDO('mysql:host=localhost;dbname=dasda', 'root', '');

// Ambil data wilayah
$wilayah_data = $db->query("SELECT id, kode_cabang, nama_provinsi FROM wilayah")->fetchAll(PDO::FETCH_ASSOC);

// Ambil data kabupaten
$kabupaten_data = $db->query("SELECT id, nama_kabupaten FROM kabupaten")->fetchAll(PDO::FETCH_ASSOC);

// Ambil data kecamatan
$kecamatan_data = $db->query("SELECT id, nama_kecamatan FROM kecamatan")->fetchAll(PDO::FETCH_ASSOC);

$pesan = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $id_wilayah = $_POST['id_wilayah'];
    $id_kabupaten = $_POST['id_kabupaten'];
    $id_kecamatan = $_POST['id_kecamatan'];
    $status = $_POST['status'];
    $keterangan = $_POST['keterangan'];
    $NIA = $_POST['NIA'];

    try {
        $stmt = $db->prepare("INSERT INTO anggota (nama, id_wilayah, id_kabupaten, id_kecamatan, status, keterangan, NIA) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nama, $id_wilayah, $id_kabupaten, $id_kecamatan, $status, $keterangan, $NIA]);
        $pesan = "✅ Anggota berhasil ditambahkan!";
    } catch (PDOException $e) {
        $pesan = "❌ Terjadi kesalahan: " . $e->getMessage();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota | P4SK</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #b3e6cc;
        }

        header {
            background-color:rgb(82, 214, 214);
            padding: 20px;
            text-align: left;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        nav {
            background-color: #a8f0e0;
            display: flex;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        nav a {
            margin-right: 10px;
            padding: 8px 16px;
            background-color: #87f3de;
            border: none;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        nav a:hover {
            background-color: #66e0c7;
            transform: scale(1.1);
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #80cfcf;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        button:hover {
            background-color: #66b3b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <header>P4SK</header>

    <nav>
        <a href="index.html">Home</a>
        <a href="data_anggota.html">Data Anggota</a>
        <a href="data_lembaga.html">Data Lembaga</a>
        <a href="tambah_anggota.html">Tambah Anggota</a>
        <a href="tambah_lembaga.html">Tambah Lembaga</a>
    </nav>

    <div class="container">
    <h2>Formulir Tambah Anggota</h2>
    <form method="post" class="space-y-4">
        <div>
            <label class="block font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" required class="w-full mt-1 p-2 border border-gray-300 rounded">
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Tambah Anggota Baru</h1>

    <?php if (!empty($pesan)) : ?>
        <div class="mb-4 p-4 <?= strpos($pesan, '✅') === 0 ? 'bg-green-100 border-green-400 text-green-700' : 'bg-red-100 border-red-400 text-red-700' ?> border rounded">
            <?= $pesan ?>
        </div>
    <?php endif; ?>

    <form method="post" class="space-y-4">
        <div>
            <label class="block font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" required class="w-full mt-1 p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Wilayah</label>
            <select name="id_wilayah" required class="w-full mt-1 p-2 border border-gray-300 rounded">
                <option value="">-- Pilih Wilayah --</option>
                <?php foreach ($wilayah_data as $w): ?>
                    <option value="<?= $w['id'] ?>"><?= htmlspecialchars($w['kode_cabang'] . ' - ' . $w['nama_provinsi']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Kabupaten</label>
            <select name="id_kabupaten" required class="w-full mt-1 p-2 border border-gray-300 rounded">
                <option value="">-- Pilih Kabupaten --</option>
                <?php foreach ($kabupaten_data as $k): ?>
                    <option value="<?= $k['id'] ?>"><?= htmlspecialchars($k['nama_kabupaten']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Kecamatan</label>
            <select name="id_kecamatan" required class="w-full mt-1 p-2 border border-gray-300 rounded">
                <option value="">-- Pilih Kecamatan --</option>
                <?php foreach ($kecamatan_data as $c): ?>
                    <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['nama_kecamatan']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Status</label>
            <input type="text" name="status" class="w-full mt-1 p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Keterangan</label>
            <textarea name="keterangan" class="w-full mt-1 p-2 border border-gray-300 rounded"></textarea>
        </div>

        <div>
            <label class="block font-medium text-gray-700">NIA</label>
            <input type="text" name="NIA" required class="w-full mt-1 p-2 border border-gray-300 rounded">
        </div>

        <div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                Tambah Anggota
            </button>
        </div>
    </form>
    

        
    </div>

</body>
</html>
