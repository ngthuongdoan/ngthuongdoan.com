<?php
$response = new stdClass();
include_once "connection.php";
openconnect();
$id = $_GET["id"];
$sql = "SELECT * FROM sanpham WHERE idsp=$id";

$result = $conn->query($sql) or die($conn->error);;
closeconnect();
while ($row = $result->fetch_assoc()) {
    $response->idsp = $row["idsp"];
    $response->tensp = $row["tensp"];
    $response->chitietsp = $row["chitietsp"];
    $response->giasp = $row["giasp"];
    $response->hinhanhsp = $row["hinhanhsp"];
}

echo json_encode($response);
