<?php
include_once "clearcache.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/buoi3/themsp.css" />

    <title>Document</title>
</head>

<body>
    <?php

    if (!isset($_SESSION["matv"])) header("Location: Bai2.php");
    include_once "connection.php";
    openconnect();
    $id = $_GET["id"];
    $sql = "SELECT * FROM sanpham WHERE idsp=$id";
    $result = $conn->query($sql);
    closeconnect();
    while ($row = $result->fetch_assoc()) {
        echo '
    <div class="container">
        <h2>Sửa sản phẩm</h2>
        <br />
        <p>Vui lòng điền đầy đủ thông tin bên dưới để thêm sản phẩm mới</p>
        <br />
        <form
            action="suasp.php"
            method="POST"
            enctype="multipart/form-data"
        >
            <table>
            <tr>
                <td><label for="username">Tên sản phẩm</label></td>
                <td><input type="text" id="username" name="tensp" value="' . $row["tensp"] . '"/></td>
            </tr>
            <tr>
                <td><label for="">Chi tiết sản phẩm</label></td>
                <td><textarea name="chitietsp" cols="30" rows="10">' . $row["chitietsp"] . '</textarea></td>
            </tr>
            <tr>
                <td><label for="confirm-password">Giá sản phẩm</label></td>
                <td><input type="number" id="confirm-password" name="giasp" value="' . $row["giasp"] . '"/></td>
            </tr>
            <tr>
                <td><input style="visibility: hidden" name="idsp" value="' . $row["idsp"] . '"></td>
                <td>
                <input type="submit" value="Sửa sản phẩm" />
                <button type="button">Làm lại</button>
                </td>
            </tr>
            </table>
        </form>
    </div>';
    };
    ?>
</body>

</html>