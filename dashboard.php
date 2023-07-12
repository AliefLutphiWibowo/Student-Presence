<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .dashboard {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
      text-align: center;
      color: #333333;
    }

    .dashboard h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .dashboard p {
      margin: 10px 0;
    }

    .profile {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin-top: 20px;
    }

    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      margin-bottom: 10px;
    }

    .profile-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .profile-info {
      color: #666666;
    }

    .menu {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .menu a {
      background-color: #3498db;
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      margin-right: 10px;
    }

    .menu a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h1>Selamat datang, Dahlan Muda</h1>
    <p>Silahkan Presensi Sesuai Jadwal</p>
    <div class="profile">
      <div class="profile-image">
        <img src="foto.png" alt="Profile Photo">
      </div>
      <div class="profile-name">Mahasiswa</div>
      <div class="profile-info">Universitas Ahmad Dahlan</div>
    </div>
    <div class="menu">
      <a href="presensi.php">Presensi</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>
</html>
