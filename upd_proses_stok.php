<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $nama_order = $_POST['nama_barang'];
 $jenis_order = $_POST['jumlah_stok'];


 $upd_barang = mysqli_query($koneksi,"UPDATE stok SET nama_barang='$nama_order' , jumlah_stok='$jenis_order'   WHERE id='$id' ");
 header('Location:stok.php');
 ?>