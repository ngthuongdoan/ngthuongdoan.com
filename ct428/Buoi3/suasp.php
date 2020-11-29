<?php
include_once "clearcache.php";
?>
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

  if (!isset($_SESSION["matv"])) header("Location: Bai2.php");
  include_once "connection.php";
  openconnect();
  $updatesql = 'UPDATE sanpham SET(tensp = "' . $_POST["tensp"] . '", chitietsp = "' . $_POST["chitietsp"] . '",giasp = ' . $_POST["giasp"] . ') WHERE idsp=' . $_GET["id"] . '';

  $conn->query($updatesql);
  closeconnect();
  header("Location: Bai3_DSSP.php")
  ?>
</body>

</html>