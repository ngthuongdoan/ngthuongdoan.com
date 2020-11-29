<?php
session_start();
if (!isset($_SESSION["matv"])) header("Location: Bai2.php");
include_once "connection.php";
openconnect();
$id = $_GET["id"];
$sql = "DELETE FROM sanpham WHERE idsp=$id";
$conn->query($sql);
closeconnect();
header("Location: Bai3_DSSP.php");
