<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $nama_order = $_POST['nama_order'];
 $jenis_order = $_POST['jenis_order'];
 $total_order = $_POST['total_order'];


 $upd_barang = mysqli_query($koneksi,"UPDATE total_order SET nama_order='$nama_order' , jenis_order='$jenis_order' , total_order='$total_order'  WHERE id='$id' ");
 header('Location:total order.php');
 ?>