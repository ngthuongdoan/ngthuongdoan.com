<?php
$matv =$_COOKIE["matv"];
$data = array();
$path ="sanpham/".random_int(3,6).$_FILES['hinhanhsp']['name']."";
$hinhanhsp ="'".$path."'";
$tensp="'".$_POST["tensp"]."'";
$chitietsp="'".$_POST["chitietsp"]."'";
$giasp=$_POST["giasp"];
array_push($data, $tensp);
array_push($data,$chitietsp);
array_push($data,$giasp);
array_push($data, $hinhanhsp);
array_push($data, $matv);

$conn = new mysqli("localhost","root","rootpassword","buoi3") or die;
$conn->set_charset("utf8"); 
$sql="INSERT INTO sanpham(tensp, chitietsp,giasp,hinhanhsp,idtv) VALUES(".implode(",",$data).")";
$conn->query($sql);
$conn->close();
move_uploaded_file($_FILES['hinhanhsp']['tmp_name'],$path);
header('Location: Bai3_DSSP.php');
