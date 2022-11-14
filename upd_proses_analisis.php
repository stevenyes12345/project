<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $nama_order = $_POST['nama'];
 $jenis_order = $_POST['bagian'];


 $upd_barang = mysqli_query($koneksi,"UPDATE analisis SET nama='$nama_order' , bagian='$jenis_order'   WHERE id='$id' ");
 header('Location:analisis.php');
 ?>