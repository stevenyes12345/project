
<?php
include "koneksi.php";
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$cek_pass= mysqli_query($koneksi,"SELECT * FROM main2 WHERE username='$username' AND password='$password'");
$ketemu=mysqli_num_rows($cek_pass);
 
// Apabila username dan password ditemukan
if ($ketemu < 1){
 
   
  header('location:home.php');
}
else{
    echo "<script>alert('Username Atau Password Anda Salah'); window.location = 'login.php'</script>";
}
?>