<?php
include"conn.php";
$id = $_GET['id'];
$qry = mysqli_query($conn,"SELECT * from olahraga where id_olahraga='$id'");
$data = mysqli_fetch_assoc($qry);
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

    <title>April Sport</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#072957;">
      <div class="container-fluid">
        <div class="navbar-header">
          
        <a class="navbar-brand" href="#"><img src="images/heder.png" style="width:150px; margin-top: -7px;"></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="background:#FFFFF3;color:#072957;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li class="a"><a href="" style="background:#FFFFF3;color:#072957;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang | </span></a></li>
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
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="gambar/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <table>
        	<tr>
        		<h3><td><b>Series</b></td>		<td>: <?php echo $data['series']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Merk</b></td>		<td>: <?php echo $data['merk']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Warna</b></td>		<td>: <?php echo $data['warna']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Ukuran</b></td>		<td>: <?php echo $data['ukuran']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Harga</b></td>		<td>: <?php echo $data['harga']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Stok</b></td>		<td>: <?php echo $data['stok']; ?></td></h3>
        	</tr>
        </table><br><br>
         <input type="number" name='qty' value="0" min="0" max="<?php echo $data['stok']; ?>">
         <a href="login.php?pesan=a" class="btn btn-success">Beli</a>
        </div>
    </div>
    </div>

    <div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#072957;color:#fff;line-height:60px;font-size:20px;">
<b>Semua Produk Olahraga:</b>
</div>
<div class="container">
      <div class="row">
      <?php
      include"conn.php";
      $qryolahraga= mysqli_query($conn,"SELECT * from olahraga");
      while($olahraga = mysqli_fetch_assoc($qryolahraga)) {
      ?>

      <div class="col-md-3" style="margin-top:20px;">
        <div class="olahraga">
        <center><img src="gambar/<?php echo $olahraga['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
         <h4 style="text-align:center; color:#559cf2;"><?php echo $olahraga['series'] ?></h4>
          <center><b>Harga</b> Rp.<?php echo $olahraga['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $olahraga['stok']; ?>)</center>
          <center><a class="btn btn-success" href="detail.php?id=<?php echo $olahraga['id_olahraga'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>

        <?php } ?>
      </div>

      <hr>

      
    </div> 
    <div class="footer" style="width:100%;height:300px;color:#fff;background:#072957;">
      <div class="row" style="background:#072957;">
      <div class="col-md-4">
      <div style="margin:60px;height:120px;color:#072957">
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
      <div style="margin:60px;height:120px;color:#072957">
        <center>
        <ul>
          <li style="color:#072957"><h3><b>Alamat Kami</b></h3></li>
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
          <li style="color:#072957"><h3><b>Contact Us</b></h3></li>
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