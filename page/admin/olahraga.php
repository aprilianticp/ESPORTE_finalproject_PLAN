<?php
include"../../conn.php";
$no = 1;
$qry_olahraga = mysqli_query($conn,"SELECT * from olahraga");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#C0C9D4;color:#072957;line-height:60px;font-size:20px;">
<b>Data Produk Olahraga</b>
</div>
<a href="index.php?page=input_olahraga" class="btn btn-primary" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH PRODUK OLAHRAGA</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_olahraga.php");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Series</center></th>
	<th style=" background: #E6E6FA;"><center>Merk</center></th>
	<th style=" background: #E6E6FA;"><center>Warna</center></th>
	<th style=" background: #E6E6FA;"><center>Gambar</center></th>
	<th style=" background: #E6E6FA;"><center>Ukuran</center></th>
	<th style=" background: #E6E6FA;"><center>Harga</center></th>
	<th style=" background: #E6E6FA;"><center>Stok</center></th>
	<th style=" background: #E6E6FA;"><center>Aksi</center></th>
	<?php while($data = mysqli_fetch_assoc($qry_olahraga)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['series'] ?></td>
	 <td><?php echo $data['merk'] ?></td>
	 <td><?php echo $data['warna'] ?></td>
	 <td><center><img src="../../gambar/<?php echo $data['gambar'] ?>" style="width:100px;"></center></td>
	 <td><?php echo $data['ukuran'] ?></td>
	 <td>Rp.<?php echo number_format($data['harga']); ?>,-</td>
	 <td><?php echo $data['stok'] ?></td>
	 <td><a href="index.php?page=editolahraga&id=<?php echo $data['id_olahraga']; ?>"><center>| <span class="glyphicon glyphicon-pencil"></span></a> | | <a href="hapus_olahraga.php?id=<?php echo $data['id_olahraga']; ?>"><span class="glyphicon glyphicon-trash"></span> |</center></a></td>
	</tr>
	<?php } ?>
</table>
</div>
