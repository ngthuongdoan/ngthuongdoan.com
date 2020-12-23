<?php
session_start();
include_once "connection.php";
openconnect();
$keyword = $_GET["keyword"];
$idtv = $_SESSION["matv"];
$sql = "select * from sanpham where idtv=$idtv and tensp like '%$keyword%'";
$result = $conn->query($sql) or die($conn->error);
closeconnect();
$response = array();
while ($row = $result->fetch_assoc()) {
    $temp = new stdClass();
    $temp->name = $row["tensp"];
    $temp->id = $row["idsp"];
    array_push($response, $temp);
}
echo json_encode($response);
