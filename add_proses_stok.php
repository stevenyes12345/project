<?php
   include "koneksi.php";
   $random_data_id = random_int(100000000,999999999); 
   $value_id = $random_data_id;  
   $value_nama_cek = $_POST['nama_barang'];
   $value_jumlah_cek = $_POST['jumlah_stok'];

   $cek_id = mysqli_query($koneksi,"select *  from stok where id = '$random_data_id'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into stok values(' $value_id','$value_nama_cek ',' $value_jumlah_cek')"
   );

   header('Location:stok.php');
   ?>