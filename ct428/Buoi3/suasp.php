<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/buoi3/themsp.css" />

    <title>Document</title>
  </head>
  <body>
    <?php 
    if(!isset($_COOKIE["matv"])) header("Location: Bai2.php");
    $conn = new mysqli("localhost","root","rootpassword","buoi3") or die;
    $conn->set_charset("utf8"); 
    $updatesql = 'UPDATE sanpham SET(tensp = "'.$_POST["tensp"].'", chitietsp = "'.$_POST["chitietsp"].'",giasp = '.$_POST["giasp"].') WHERE idsp='.$_GET["id"].'';

    $conn->query($updatesql);

    header("Location: Bai3_DSSP.php")
    ?>
  </body>
</html>
