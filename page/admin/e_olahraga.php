<?php
include"../../conn.php";
	$kat = $_POST['kat'];
	$series = $_POST['series'];
	$merk = $_POST['merk'];
	$warna = $_POST['warna'];
	$ukuran = $_POST['ukuran'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$qryid = mysqli_query($conn,"SELECT * FROM kategori where kategori='$kat'");
	$data = mysqli_fetch_assoc($qryid);
	$id_ketegori = $data['id_ketegori'];

@$message		= '';
$valid_file		= true;
$max_size		= 1024000;


if($_FILES['gambar']['name']){
	
	if(!$_FILES['gambar']['error']){


		$new_file_name = strtolower($_FILES['gambar']['tmp_name']); 
		if($_FILES['gambar']['size'] > $max_size) 
		{
			$valid_file	= false;
			$message	= 'Maaf, file terlalu besar. Max: 1MB';
		}
	



		$image_path = pathinfo($_FILES['gambar']['name'],PATHINFO_EXTENSION); 
		$extension = strtolower($image_path); 

		if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" && $extension != "webp" ) {
			$valid_file = false;
			$message	= "Maaf, file yang diijinkan hanya format JPG, JPEG, PNG, GIF & WEBP. #".$extension;
		}



	
		if($valid_file == true)
		{
		
			$rename_nama_file	= date('YmdHis');
			$nama_file_baru		= $rename_nama_file.'.'.$extension;


			
			mysqli_query($conn,"INSERT into olahraga set series='$series',id_ketegori='$id_ketegori',warna='$warna',merk='$merk',ukuran='$ukuran',harga='$harga', gambar='$nama_file_baru', stok='$stok'");
		
			move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar/'.$nama_file_baru);
			header("location:index.php?page=olahraga");
		}
	}
	
	else
	{

		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['gambar']['error'];
	}
}
?>