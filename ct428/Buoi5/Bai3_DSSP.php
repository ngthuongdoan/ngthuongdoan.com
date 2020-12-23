<?php
include_once "/ct428/Buoi3/clearcache.php";
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
        include_once "/ct428/Buoi3/connection.php";
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
            echo "<td><a onclick='xemchitiet(" . $row["idsp"] . ")'>Xem chi tiết</a></td>";
            echo "<td><a href='/ct428/Buoi3/Bai3_SuaSP.php?id=" . $row["idsp"] . "'>Sửa</a></td>";
            echo "<td><a href='/ct428/Buoi3/xoasp.php?id=" . $row["idsp"] . "'>Xoá</a></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='5'>Không có sản phẩm</td></tr>";
        }
        ?>
      </tbody>
    </table>
    <form action="/ct428/Buoi3/dangxuat.php" method="GET">
      <input type="submit" value="Đăng xuất">
    </form>
    <div id="ttsp">
    </div>
  </div>
  <script>
    const xemchitiet = async (id) => {
      const response = await fetch(`xemChiTiet.php?id=${id}`);
      const data = await response.json();
      const container = document.getElementById("ttsp");
      for (let [key, value] of Object.entries(data)) {
        let p = document.createElement("p");
        p.innerText = `<b>${key}: </b> ${value}`;
        container.appendChild(p);
      }
    }
  </script>
</body>

</html>