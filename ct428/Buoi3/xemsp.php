<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE["matv"])) header("Location: Bai2.php");
        $conn = new mysqli("localhost","root","rootpassword","buoi3") or die;
        $conn->set_charset("utf8"); 

        $sql = "SELECT * FROM sanpham WHERE idsp = ".$_GET["id"]."";

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo "<p><b>ID: </b> ".$row["idsp"]."</p>";
            echo "<p><b>Tên: </b> ".$row["tensp"]."</p>";
            echo "<p><b>Chi tiết: </b> ".$row["chitietsp"]."</p>";
            echo "<p><b>Giá: </b> ".$row["giasp"]."</p>";
            echo "<p><b>Hình ảnh: </b> <img src='".$row["hinhanhsp"]."'></p>";
        }
    ?>
</body>
</html>

