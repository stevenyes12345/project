<?php
   include "koneksi.php";
   $random_data_id = random_int(100000000,999999999); 
   $value_id = $random_data_id;  
   $value_barang_disukai_cek = $_POST['barang_disukai'];
   $value_harga_cek = $_POST['harga'];

   $cek_id = mysqli_query($koneksi,"select *  from favorites where id = '$random_data_id'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into favorites values(' $value_id','$value_barang_disukai_cek ',' $value_harga_cek')"
   );

   header('Location:favorites.php');
   ?>