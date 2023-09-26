<!DOCTYPE html>
<html>
<head>
  <title>Login Aplikasi</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript">
    // Kode JavaScript Anda di sini
  </script>
  <?php
  @$pesan = $_GET['pesan'];
  if ($pesan == "gagal") {
    echo "<script type='text/javascript'>
      alert('Username or password not valid');
    </script>";
  } else if ($pesan == "berhasil") {
    echo "<script type='text/javascript'>
      alert('anda berhasil mendaftar, silahkan login');
    </script>";
  } else if ($pesan == "a") {
    echo "<script type='text/javascript'>
      alert('Anda harus melakukan LOGIN terlebih dahulu sebelum melakukan pemesanan');
    </script>";
  }
  ?>
</head>

<body>
  <div class="vid-container">
    <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="video/1.mp4" type="video/mp4">
    </video>
    <div class="inner-container">
      <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
        <source src="video/1.mp4" type="video/mp4">
      </video>
      <div class="box">
        <h1>Silahkan Login</h1>
        <div class="col-md-6">
          <a href="adminweb.php" class="btn btn-primary">Login Admin</a>
        </div>
        <div class="col-md-6">
          <a href="logincustomer.php" class="btn btn-success">Login Customer</a>
        </div>
        <h5>Belum punya akun?</h5>
       <span><a href="daftar.php?">Daftar</a></span></p>
      </div>
    </div>
  </div>
</body>
</html>
