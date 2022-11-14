<?php
   include "koneksi.php";
   $random_data_total = random_int(100000000,999999999); 
   $value_id = $random_data_total;  
   $value_nama_order_cek = $_POST['nama_order'];
   $value_jenis_order_cek = $_POST['jenis_order'];
   $value_total_order_cek = $_POST['total_order'];
    
   $cek_id = mysqli_query($koneksi,"select *  from total_order where id = '$random_data_total'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into total_order values(' $value_id','$value_nama_order_cek ',' $value_jenis_order_cek','$value_total_order_cek')"
   );

   header('Location:total order.php');
   ?>