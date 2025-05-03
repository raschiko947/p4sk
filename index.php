<?php
$db = new PDO('mysql:host=localhost;dbname=dasda', 'root', '');
$anggota = $db->query("SELECT * FROM anggota")->fetchAll(PDO::FETCH_ASSOC);
include 'header.php';
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda P4SK</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(to bottom, #116530, #38b000);
      color: white;
      text-align: center;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(0, 40, 0, 0.6);
      padding: 20px 40px;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 500;
    }

    .hero {
  padding: 60px 20px;
  background-image: url('');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}


    .hero h1 {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      opacity: 0.9;
    }

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 20px;
      padding: 40px;
      max-width: 800px;
      margin: auto;
    }

    .menu-item {
      background-color: #e1f7d5;
      color: #1c3b1f;
      padding: 20px;
      border-radius: 16px;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }

    .menu-item:hover {
      transform: scale(1.05);
    }

    .admin-btn {
      margin: 30px auto;
      display: inline-block;
      padding: 12px 30px;
      background-color: #1f7a1f;
      color: white;
      font-weight: bold;
      border-radius: 30px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .admin-btn:hover {
      background-color: #145c14;
    }

    footer {
      background-color: #033d20;
      padding: 20px;
      font-size: 14px;
    }

    .socials {
      margin-top: 10px;
    }

    .socials img {
      width: 28px;
      margin: 0 8px;
      vertical-align: middle;
    }

    @media (max-width: 600px) {
      .hero h1 {
        font-size: 32px;
      }

      nav {
        display: none;
      }
    }
  </style>
</head>
<body>
  <section class="hero">
    <h1>MARHABAN</h1>
    <p>Selamat datang di portal resmi P4SK – tempat berkumpulnya semangat, iman, dan prestasi.</p>
  </section>

  <section class="menu-grid">
    <div class="menu-item">📷 Galeri</div>
    <div class="menu-item">📅 Jadwal</div>
    <div class="menu-item">📚 Materi</div>
    <div class="menu-item">👤 Profil</div>
    <div class="menu-item">📊 Statistik</div>
    <div class="menu-item">📞 Kontak</div>
  </section>

  <a class="admin-btn" href="Login.php">🔑 Masuk Sebagai Pengurus</a>

  <footer>
    <p>&copy; 2025 P4SK. All rights reserved.</p>
    <div class="socials">
      <img src="https://img.icons8.com/ios-glyphs/30/ffffff/facebook-new.png" alt="Facebook" />
      <img src="https://img.icons8.com/ios-glyphs/30/ffffff/instagram-new.png" alt="Instagram" />
      <img src="https://img.icons8.com/ios-glyphs/30/ffffff/whatsapp.png" alt="WhatsApp" />
    </div>
  </footer>

</body>
</html>
