<?php 

$drop = $_GET['delete'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$drop = "DELETE FROM order_list WHERE id = '$drop' ";

if (mysqli_query($koneksi , $drop)) {
 # redirect ke index.php
 header("location:order.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
