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

  $id_update_total = $_GET['update'];
 
  $upd_barang= mysqli_query($koneksi,"select  *  from total_order where id ='$id_update_total' ");
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
    <form action="upd_proses_total_order.php" method="post">
        <table border="0" height="150px" class="hey" border="0" bgcolor="#c2af8d" >
            <tr>
                <td align="center" class="pink">ID</td>
                <td>:</td>
            <td align="center">
                <input readonly type="text" name="id" value="<?php echo $upd['id'];?>">
</td></tr>
<td align="center" class="pink" >nama order</td>
                <td>:</td>
            <td align="center">
                <input type="text" name="nama_order" value="<?php echo $upd['nama_order'];?>">
</td></tr>
<td align="center" class="pink">jenis order</td>
                <td>:</td>
            <td align="center">
                <input type="text" name="jenis_order" value="<?php echo $upd['jenis_order'];?>">
</td></tr>
<td align="center" class="pink">total order</td>
                <td>:</td>
            <td align="center">
                <input type="text" name="total_order" value="<?php echo $upd['total_order'];?>">
</td></tr>
<tr>
    <td align="center" colspan="3"><input type="submit" value="submit"></td></tr>
        </table>
</body>


