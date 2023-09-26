<?php
include"config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ESPORTE Homepage</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
  .jumbotron {
    background-image: url('images/bg.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    color: #C0C9D4;
    height: 600px; /* Mengatur tinggi jumbotron */
    padding: 20px;
  }
</style>
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#FFFFF3;">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="/"><img src="images/header.png" style="width:100px; margin-top: -7px;"></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="background:#FFFFF3;color:#072957;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li><a href="" style="background:#FFFFF3;color:#072957;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
          <li class="a"><a href="cara_pesan.php" style="background:#FFFFF3;color:#072957;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>
          <li class="a"><a href="login.php" style="background:#FFFFF3;color:#072957;"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div class="jumbotron">
  <div class="container-fluid">
  </div>
</div>
<div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#072957;color:#C0C9D4;line-height:60px;font-size:20px;">
<b>Semua Produk Olahraga</b>
</div>
    <div class="container">
      <div class="row">
      <?php
      include"conn.php";
      @$idkat = $_GET['id'] ;
      $qryolahragakat = mysqli_query($conn,"SELECT * from olahraga where id_ketegori='$idkat'");
      $qryolahraga= mysqli_query($conn,"SELECT * from olahraga");
      if($idkat==0){
      while($olahraga = mysqli_fetch_assoc($qryolahraga)) {
      ?>
      
        <div class="col-md-3" style="margin-top:20px;">
        <div class="olahraga">
        <center><img src="gambar/<?php echo $olahraga['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
         <h4 style="text-align:center; color:#072957;"><?php echo $olahraga['series'] ?></h4>
          <center>Rp.<?php echo $olahraga['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $olahraga['stok']; ?>)</center>
          <center><a class="btn btn-primary" href="detail.php?id=<?php echo $olahraga['id_olahraga'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
        <?php } }
        else{ while($olahraga1 = mysqli_fetch_assoc($qryolahragakat)){?>
            <div class="col-md-3" style="margin-top:20px;">
        <div class="olahraga">
        <center><img src="gambar/<?php echo $olahraga1['gambar'] ?>" style="margin-top:20px;width:210px;height:190px;"></center>
        <h4 style="text-align:center; color:#07295; "><?php echo $olahraga1['series'] ?></h4>
          <center><b>Harga</b> Rp.<?php echo $olahraga1['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $olahraga1['stok']; ?>)</center>
          <center><a class="btn btn-primary" href="detail.php?id=<?php echo $olahraga1['id_olahraga'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
          <?php }} ?>
      </div>

      <hr>

      
    </div> 
     
    <div class="footer" style="width:100%;height:300px;color:#fff;background:#072957;">
      <div class="row" style="background:#072957;">
      <div class="col-md-4">
      <div style="margin:60px;height:120px;color:#C0C9D4">
        <center>
        <ul>
          <li><h3><b>Tentang April Sport</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li><b>April Sport </b> adalah</li>
          <li>Sebuah toko online yang</li>
          <li>menyediakan semua jenis peralatan</li>
          <li>olahraga berdasarkan kategori.</li>
          <li></li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:60px;height:120px;color:#C0C9D4">
        <center>
        <ul>
          <li style="color:#C0C9D4"><h3><b>Alamat Kami</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Jl. Raya Bandung Barat</li>
          <li>Jawa Barat</li>
          <li>Indonesia</li>
          <li>Asia Tenggara</li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:60px;height:120px;">
        <center>
        <ul>
          <ul>
          <li style="color:#C0C9D4"><h3><b>Contact Us</b></h3></li>
          <hr>
         <div class="row">
         <div class="col-md-4">
    <a href="https://www.facebook.com"><img src="images/fb.png" style="width:70px;height:75px;"></a>
</div>
<div class="col-md-4">
    <a href="https://www.instagram.com"><img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-instagram-icon-png-image_6315974.png" style="width:70px;height:75px;"></a>
</div>
<div class="col-md-4">
    <a href="https://www.twitter.com"><img src="images/Twitter.png" style="width:70px;height:75px;"></a>
</div>

         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px;">
        <center>&copy; 2023 Karya www.ApriliantiCaturPutri.id </center>
        </div>
      </div>
  </body>
</html>
