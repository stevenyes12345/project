<style>
      .hey{
        border-radius : 20px ;
        height: 200px;
        margin-top: 15%;
        margin-right: 35%;
        margin-left:33%;
    }

    .pink{
        color: #665c53;
        font-weight : bold;    }
    </style>
<?php
  include "koneksi.php";

  $id_update_barang = $_GET['update'];
 
  $upd_barang= mysqli_query($koneksi,"select  *  from analisis where id ='$id_update_barang' ");
  $upd = mysqli_fetch_array($upd_barang);
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
</head>
<body bgcolor="#e0d4c4">
    <form action="upd_proses_analisis.php" method="post">
        <table border="0" height="150px" class="hey" border="0" bgcolor="#c2af8d" >
            <tr>
                <td align="center" class="pink">ID</td>
                <td>:</td>
            <td align="center">
                <input readonly type="text" name="id" value="<?php echo $upd['id'];?>">
</td></tr>
<td align="center" class="pink" >nama</td>
                <td>:</td>
            <td align="center">
                <input type="text" name="nama" value="<?php echo $upd['nama'];?>">
</td></tr>
<td align="center" class="pink">bagian</td>
                <td>:</td>
            <td align="center">
                <input type="text" name="bagian" value="<?php echo $upd['bagian'];?>">
</td></tr>
<tr>
    <td align="center" colspan="3"><input type="submit" value="submit"></td></tr>
        </table>
</body>


