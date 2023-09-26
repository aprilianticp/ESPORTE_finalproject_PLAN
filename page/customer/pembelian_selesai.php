<div style="margin-top: 10px; width:100%,height:50px;text-align:center;background:#072957;color:#C0C9D4;line-height:60px;font-size:20px;">
<b>Pembelian Selesai</b>
</div>
<?php
include"../../conn.php";
$id_pembeli = $_SESSION['id_pembeli'];
$query_checkout = mysqli_query($conn,"SELECT * from  chekout where id_pembeli='$id_pembeli'");
$data_chekout = mysqli_fetch_assoc($query_checkout);
?>
<h3 style="margin: 10px;"><b>Data Penerima :</b></h3>
<table style="margin: 10px;">
	<tr>
		<td><p><b>Nama</b></p></td>  	<td>: <?php echo $data_chekout['nama']; ?></td>
	</tr>

	<tr>
		<td><p><b>Alamat</b></p></td>	<td>: <?php echo $data_chekout['alamat']; ?></td>
	</tr>

	<tr>
		<td><p><b>Nomor Telepon</b></p></td>	<td>: <?php echo $data_chekout['nomor_tlp']; ?></td>
	</tr>
</table>

<h3 style="margin: 10px;"><b>Data Order</b></h3>
<?php
$qry = mysqli_query($conn,"SELECT * from keranjang where id_pembeli='$id_pembeli'");
?>
<div class="container">
<table class="table table-bordered" style="margin: 10px;">
	<th>series olahraga</th><th>harga</th><th>qty</th><th>total harga</th>
	<?php while($keranjang=mysqli_fetch_assoc($qry)){?>
		<tr>
		<td><?php
		$q = mysqli_query($conn,"SELECT * from olahraga where id_olahraga='$keranjang[id_olahraga]'");
		$d = mysqli_fetch_assoc($q);
		$series = $d['series']; echo $series;
		$qbyar = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?>
			
		</td>
		<td><?php echo $keranjang['harga'] ?></td>
		<td><?php echo $keranjang['qty']?></td>
		<td><?php echo $keranjang['total_harga']?></td>
		</tr>
<?php } ?>
<tr>
	<td colspan="3">Total harga keseluruhan</td><td><?php echo $bayar;  ?></td>
</tr>
<tr>
	<td colspan="3">Ongkos Kirim (Fix)</td><td>Rp.15,000</td>
</tr>
<tr>	
	<td colspan="3">Total Bayar</td><td>Rp.<?php $t_bayar=$bayar+15000; echo number_format($t_bayar); ?></td>
</tr>
</table>
<h4 style="margin: 10px;"><p>Selanjutnya anda harus megirimkan uang yang tertera pada total bayar ke <b>No. Rek: 123.456.789.0</b> atas nama <b>Aprilia Putri</b>. Setelah melakukan pembayaran anda bisa mengonfirmasi melalui <b>No.Tlp. 081234567890</b>. <a href="index.php" class="btn btn-primary"> Selesai</a> </p></h4>
</div>