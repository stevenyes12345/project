<?php
   include "koneksi.php";
   $random_data_order = random_int(100000000,999999999); 
   $value_id = $random_data_order;  
   $value_name_cek = $_POST['name'];
   $value_datecreation_cek = $_POST['detecreation'];
   $value_status_cek = $_POST['status'];
   $value_username_cek = $_POST['username'];
    
   $cek_id = mysqli_query($koneksi,"select *  from order_list where id = '$random_data_order'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into order_list values(' $value_id','$value_name_cek ',' $value_datecreation_cek','$value_status_cek','$value_username_cek')"
   );

   header('Location:order.php');
   ?>