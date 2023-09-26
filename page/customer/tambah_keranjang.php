<?php
include"../../conn.php";
session_start();
$id_pembeli = $_SESSION['id_pembeli'];
$q_aman = mysqli_query($conn,"SELECT * from chekout where id_pembeli='$id_pembeli'");
$aman = mysqli_num_rows($q_aman);
if($aman==0)

{
$id_olahraga = $_POST['id_olahraga'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$total_harga = $qty*$harga;
$qryolahraga = mysqli_query($conn,"SELECT * from keranjang where id_olahraga='$id_olahraga'");
$q_stok = mysqli_query($conn,"SELECT * from olahraga where id_olahraga='$id_olahraga'");
$d_stok = mysqli_fetch_assoc($q_stok);
$stok = $d_stok['stok'];
$siso_stok = $stok-$qty;
mysqli_query($conn,"UPDATE olahraga set stok='$siso_stok' where id_olahraga='$id_olahraga'");
$data = mysqli_fetch_assoc($qryolahraga);
$idbuk = $data['id_olahraga'];
if($id_olahraga==$idbuk)
{
	$q_qty = mysqli_query($conn,"SELECT * from keranjang where id_olahraga='$id_olahraga'");
	$data_qty = mysqli_fetch_assoc($q_qty);
	$qty1 = $data_qty['qty'];
	$qty2 = $qty1 + $qty;
	$tot = $harga * $qty2;
mysqli_query($conn,"UPDATE keranjang set id_pembeli='$id_pembeli',id_olahraga='$id_olahraga',qty='$qty2',harga='$harga',total_harga='$tot' where id_olahraga='$id_olahraga'");
header("location:detail.php?page=keranjang");
}

else{
mysqli_query($conn,"INSERT into keranjang set id_pembeli='$id_pembeli',id_olahraga='$id_olahraga',qty='$qty',harga='$harga',total_harga='$total_harga'");
header("location:detail.php?page=keranjang");
}
}
else if($aman>=1)
{
	header("location:index.php?pesan=blok");
}
?>