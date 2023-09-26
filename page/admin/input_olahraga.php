<?php
include"../../conn.php";
$qry_kategori = mysqli_query($conn,"SELECT * from kategori");

	?>
	<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#C0C9D4;color:#072957;line-height:60px;font-size:20px;">
Tambah Produk Olahraga
</div>
<form method="post" class="form-group" action="tambah_olahraga.php" enctype="multipart/form-data" style="margin-top:20px;">
	<select name="kat" class="form-control">
	<?php 
	while($kategori=mysqli_fetch_assoc($qry_kategori)){
	?>
			<option><?php echo $kategori['kategori']; ?></option>
			<?php } ?>
	</select><br>
	<input type="text" name="series" placeholder="Series" class="form-control"><br>
	<input type="text" name="merk" placeholder="Merk" class="form-control"><br>
	<input type="text" name="warna" placeholder="Warna" class="form-control"><br>
	<input type="file" name="gambar" placeholder="Gambar" class="form-control"><br>
	<input type="text" name="ukuran" placeholder="Ukuran" class="form-control"><br>
	<input type="text" name="harga" placeholder="Harga Produk" class="form-control"><br>
	<input type="text" name="stok" placeholder="Stok Produk" class="form-control"><br>
	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"><br>
	</form>