<?php
$conn = new mysqli("localhost", "root", "rootpassword", "buoi3") or die;
$conn->set_charset("utf8");

$tendangnhap = "'" . $_POST["tendangnhap"] . "'";
$matkhau = md5($_POST["matkhau"]);
$sql = "SELECT * FROM thanhvien WHERE tendangnhap=" . $tendangnhap . "";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["matkhau"] == $matkhau) {
            session_start();
            $_SESSION['matv'] = $row["id"];
            $_SESSION['tendangnhap'] = $row["tendangnhap"];
            header('Location: TTCN.php');
        } else {
            header('Location: Bai2.php');
        }
    }
} else {
    header('Location: Bai2.php');
}

$conn->close();
