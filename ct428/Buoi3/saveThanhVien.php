<?php
$conn = new mysqli("localhost","root","rootpassword","buoi3") or die;
$conn->set_charset("utf8"); 
$data = array();

$tendangnhap="'".$_POST["tendangnhap"]."'";
$matkhau="'".md5($_POST["matkhau"])."'";
$path ="upload/".$_FILES['hinhanh']['name']."";
$hinhanh ="'".$path."'";
$gioitinh="'".$_POST["gioitinh"]."'";
$nghenghiep="'".$_POST["nghenghiep"]."'";
$sothich="'".implode(",",$_POST["sothich"])."'";
array_push($data, $tendangnhap);
array_push($data,$matkhau);
array_push($data,$hinhanh);
array_push($data, $gioitinh);
array_push($data, $nghenghiep);
array_push($data, $sothich);

$sql = 
    "INSERT INTO 
    thanhvien(tendangnhap,matkhau,hinhanh,gioitinh,nghenghiep,sothich) 
    VALUES(".implode(",", $data).")";
$conn->query($sql);
$conn->close();
move_uploaded_file($_FILES['hinhanh']['tmp_name'],$path);
header('Location: Bai2.php?action=dangky');
