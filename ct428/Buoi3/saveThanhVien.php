<?php
include_once "connection.php";
openconnect();
$tendangnhap = $_POST["tendangnhap"];
$matkhau = md5($_POST["matkhau"]);
$path = "upload/" . random_int(3, 6) . $_FILES['hinhanh']['name'] . "";
$gioitinh = $_POST["gioitinh"];
$nghenghiep = $_POST["nghenghiep"];
$sothich = implode(",", $_POST["sothich"]);

$sql =
    "INSERT INTO 
    thanhvien(tendangnhap,matkhau,hinhanh,gioitinh,nghenghiep,sothich) 
    VALUES('$tendangnhap', '$matkhau', '$path', '$gioitinh', '$nghenghiep', '$sothich')";
$conn->query($sql);

closeconnect();
move_uploaded_file($_FILES['hinhanh']['tmp_name'], $path);

header('Location: Bai2.php?action=dangky');
