<?php
include_once "clearcache.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (!isset($_SESSION["matv"])) header("Location: Bai2.php");
    include_once "connection.php";
    openconnect();
    $id = $_GET["id"];
    $sql = "SELECT * FROM sanpham WHERE idsp = $id";

    $result = $conn->query($sql);
    closeconnect();
    while ($row = $result->fetch_assoc()) {
        echo "<p><b>ID: </b> " . $row["idsp"] . "</p>";
        echo "<p><b>Tên: </b> " . $row["tensp"] . "</p>";
        echo "<p><b>Chi tiết: </b> " . $row["chitietsp"] . "</p>";
        echo "<p><b>Giá: </b> " . $row["giasp"] . "</p>";
        echo "<p><b>Hình ảnh: </b> <img src='" . $row["hinhanhsp"] . "'></p>";
    }
    ?>
</body>

</html>