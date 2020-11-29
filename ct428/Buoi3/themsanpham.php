<?php
session_start();
$matv = $_SESSION["matv"];
$path = "sanpham/" . random_int(3, 6) . $_FILES['hinhanhsp']['name'] . "";
$tensp = $_POST["tensp"];
$chitietsp = $_POST["chitietsp"];
$giasp = $_POST["giasp"];

include_once "connection.php";
openconnect();
$sql = "INSERT INTO 
        sanpham(tensp, chitietsp,giasp,hinhanhsp,idtv)
        VALUES('$tensp', '$chitietsp', $giasp, '$path', $matv)";
$conn->query($sql);
closeconnect();
move_uploaded_file($_FILES['hinhanhsp']['tmp_name'], $path);
header('Location: Bai3_DSSP.php');
