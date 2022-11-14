<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $nama_order = $_POST['barang_disukai'];
 $jenis_order = $_POST['harga'];


 $upd_barang = mysqli_query($koneksi,"UPDATE favorites SET barang_disukai='$nama_order' , harga='$jenis_order'   WHERE id='$id' ");
 header('Location:favorites.php');
 ?>