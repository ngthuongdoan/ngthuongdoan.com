<?php
include_once "clearcache.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/styles/buoi3/dssp.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php
    echo "<h1>Chào bạn " . $_SESSION["tendangnhap"] . "</h1>";
    ?>
    <p>Danh sách sản phẩm của bạn là: </p>
    <table>
      <thead>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th colspan="3">Lựa chọn</th>
      </thead>
      <tbody>
        <?php

        if (!isset($_SESSION["matv"])) header("Location: Bai2.php");
        include_once "connection.php";
        openconnect();
        $idtv = $_SESSION['matv'];
        $sql = "SELECT * FROM sanpham WHERE idtv=$idtv";
        $result = $conn->query($sql);
        closeconnect();
        $i = 0;
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $i++;
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $row["tensp"] . "</t d>";
            echo "<td>" . $row["giasp"] . " (VNĐ)</td>";
            echo "<td><a href='xemsp.php?id=" . $row["idsp"] . "'>Xem chi tiết</a></td>";
            echo "<td><a href='Bai3_SuaSP.php?id=" . $row["idsp"] . "'>Sửa</a></td>";
            echo "<td><a href='xoasp.php?id=" . $row["idsp"] . "'>Xoá</a></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='5'>Không có sản phẩm</td></tr>";
        }
        ?>
      </tbody>
    </table>
    <form action="dangxuat.php" method="GET">
      <input type="submit" value="Đăng xuất">
    </form>
  </div>
</body>

</html>