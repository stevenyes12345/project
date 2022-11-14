
<?php 
session_start();
 
// menghapus semua session
session_destroy();

// mengalihkan halaman dan mengirim pesan logout
header("location:login.php?pesan=logout");
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="asset/css/bootstrap.min.css" rel="stylesheet">
<title>FORM LOGIN</title>
</head>
<body>
<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">ANDA TELAH KELUAR</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4 text-white">silahkan klik tombol login kembali</p> 
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="index.php" class="btn btn-outline-info btn-lg" role="button">Login</a>
            </div>
        </div>
    </div>
</div>
<center><p class="mt-5 mb-3 text-dark">&copy;kreasi Opensourece @2022-2023</p></center>
</body>
</html>