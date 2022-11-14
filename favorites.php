<html>
    <title>latihan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: white ;
}


.navbar {
  overflow: hidden;
  background-color: #665c53;
  padding: 20px 100px;
  font-family: "Times New Roman", Times, serif;
  font-size: 40px;
  font-weight: bold;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: #d7aa92;
  text-align: center;
  padding: 20px 30px;
  text-decoration: none;
  margin: 5px;
}


.navbar a:hover, .dropdown:hover .dropbtn {
 background-color: #e0d4c4;
}
a:hover {
  background-color: #e0d4c4;
}
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
h3{
  padding:16px;
  text-align: center;
  color: #665c53;
  font-style: italic ;
  font-weight : bold;
  -webkit-text-stroke-width: 0.5px;
   -webkit-text-stroke-color: #665c53;}

/* Create three equal columns that floats next to each other */

</style>
</head>
<body>

<div>
  <h3>CEgm</h3>
</div>

    <table  border="0" class="table table-hover table-responsive">
      <tr>
    <td colspan="9." align="center"><a href="tambah_favorites.php">TAMBAHKAN DATA </a></td></tr>
        <tr>
        <td>id</TD>
        <td>barang_disukai</td>
        <td>harga</td>
        <td colspan="2" align="center">aksi</td>
        </tr>
        <?php 
        include "koneksi.php";
        $data = mysqli_query($koneksi,"SELECT * FROM favorites");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $d['id'];?></TD> 
        <td><?php echo $d['barang_disukai'];?></TD>
        <td><?php echo $d['harga'];?></TD>
        <td><a href="upd_favorites.php?update=<?php echo $d['id'];?>">update</td></a>
        <td><a href="delete_favorites.php?delete=<?php echo $d['id'];?>">delete</td></a>
        <?php 
       } ?>
    </table>
    <a href="dashboard.php">back</a>
</html>