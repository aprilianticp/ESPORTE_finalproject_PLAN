<?php
include"../../conn.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM olahraga WHERE id_olahraga='$bk'");
header("location:index.php?page=olahraga");
 ?>