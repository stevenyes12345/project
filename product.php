<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Ecomerce</title>
    <style>
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
  
body
{
    background-color: white;


}
  
.badan
{
    width: 880px;
    margin: 35px auto;
    background-color: white;
    padding: 20px;
    overflow: hidden;
}
  
.badan h2
{
    color: crimson;
    border-bottom: 1px solid gainsboro;
    margin: 5px;
    margin-bottom: 13px;
}
  
.list-produk
{
    border: 1px solid gainsboro;
    padding: 10px;
    float: left;
    width: 200px;
    margin: 5px;
}
  
.list-produk:hover
{
    transition-duration: 700ms;
    box-shadow: 5px 5px gainsboro;
}
  
.list-produk img
{
    width: 100%;
    height: 175px;
    display: block;
    margin-bottom: 5px;
}
  
.list-produk h4, .list-produk h5
{
    color: crimson;
    text-align: center;
    margin-bottom: 5px;
}
  
.tombol
{
    text-decoration: none;
    border-radius: 7px;
    padding: 7px;
    display: block;
    float: left;
    width: 45%;
    margin: 4px;
    text-align: center;
    color: white;
}
  
.tombol:hover
{
    background-color: black;
    transition-duration: 700ms;
}
  
.tombol-detail
{
    background-color: green;
}
  
.tombol-beli
{
    background-color: crimson;
}
button {
    background-color: aqua;
}
a {
    background-color: white;
    
}
a:hover {
  background-color: #e0d4c4;
}
</style>
</head>
<body>
      
    <div class="badan">
        <h2>Produk Baru</h2>
        <p>CEgm</p>
  
        <div class="list-produk">
            <img src="https://ds393qgzrxwzn.cloudfront.net/resize/c500x500/cat1/img/images/0/5wwOBSGJhI.jpg" alt="Jaket Parasut">
  
            <h4>Jaket Parasut Polos</h4>
            <h5>Rp 150.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
  
        <div class="list-produk">
            <img src="https://www.hezeidco.com/image/images_1/images/g/ErEAAOSw4h1f3dii/s-l500.jpg" alt="Jaket Tactical">
  
            <h4>Jaket Tactical Hitam</h4>
            <h5>Rp 230.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
  
        <div class="list-produk">
            <img src="https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/65d24b2397e0b9675e359624dcd6890f448c829a_xxl-1.jpg" alt="bomber jacket">
  
            <h4>Jaket Bomber Stylish</h4>
            <h5>Rp 250.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
  
        <div class="list-produk">
            <img src="https://cdn.shopify.com/s/files/1/2704/7034/products/Front_jacket_db6847e9-6d18-4a30-9d57-1ae6cbd7688c_740x.jpg?v=1572972397" alt="Jaket Naruto">
  
            <h4>Jaket Naruto</h4>
            <h5>Rp 170.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
    </div>
    <a href="dashboard.php">back</a>
  
</body>
</html>