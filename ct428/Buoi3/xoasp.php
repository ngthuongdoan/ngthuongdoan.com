<?php
if(!isset($_COOKIE["matv"])) header("Location: Bai2.php");
$conn = new mysqli("localhost","root","rootpassword","buoi3") or die;
$conn->set_charset("utf8"); 

$sql = "DELETE FROM sanpham WHERE idsp=".$_GET["id"]."";
$conn->query($sql);
$conn->close();
header("Location: Bai3_DSSP.php");