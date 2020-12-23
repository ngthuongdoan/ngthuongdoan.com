<?php
require("connection.php");
openconnect();
$tendangnhap = $_GET["tendangnhap"];
$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap'";

$result = $conn->query($sql);
closeconnect();
$response = new stdClass();
if ($result->num_rows > 0) {
    $response->status = 403;
    $response->msg = "Tên đăng nhập đã tồn tại";

    echo json_encode($response);
} else {
    $response->status = 200;
    $response->msg = "Tên đăng nhập hợp lệ";

    echo json_encode($response);
}
