<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php
include"../../conn.php";
$e=$_GET['id'];
$edit=mysqli_query($conn,"SELECT * FROM olahraga WHERE id_olahraga='$e'");
$olahraga = mysqli_fetch_assoc($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#C0C9D4;color:#072957;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Produk Olahraga
</div>
<form action="e_olahraga.php" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_olahraga" class="form-control" value =" <?php  echo $olahraga['id_olahraga'];?>">
 		<b>Kategori olahraga :</b><select name="kategori" class="form-control">
 			<?php
 			$d = mysqli_query($conn,"SELECT * from kategori");
 			while($data = mysqli_fetch_assoc($d)){ ?>;
 			<option> <?php echo $data['kategori']; ?> </option>
 			<?php } ?>
 		</select><br>
 		<b>Series :</b> <input type="text" name="series" class="form-control" value =" <?php  echo $olahraga['series'];?>" ><br>
 		<b>Merk :</b><input type="text" name="merk" class="form-control" value =" <?php  echo $olahraga['merk'];?>"><br>
 		<b>Warna : </b><input type="text" name="warna" class="form-control" value =" <?php  echo $olahraga['warna'];?>"><br>
 		<b>Gambar : </b><input type="file" name="gambar" class="form-control" value =" <?php  echo $olahraga['gambar'];?>" ><br>
 		<b>Ukuran : </b><input type="text" name="ukuran" class="form-control" value =" <?php  echo $olahraga['ukuran'];?>"><br>
 		<b>Harga : </b><input type="text" name="harga" class="form-control" value =" <?php  echo $olahraga['harga'];?>" ><br>
 		<b>Stok : </b><input type="text" name="stok" class="form-control" value =" <?php  echo $olahraga['stok'];?>" ><br>
 		<td><input type="submit" class="btn btn-primary" value="simpan">
</form>