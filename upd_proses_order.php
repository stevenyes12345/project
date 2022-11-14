<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $name = $_POST['name'];
 $datecreation = $_POST['datecreation'];
 $status = $_POST['status'];
 $username = $_POST['username'];


 $upd_barang = mysqli_query($koneksi,"UPDATE order_list SET name='$name' , datecreation='$datecreation' , status='$status', username='$username'  WHERE id='$id' ");
 header('Location:order.php');
 ?>