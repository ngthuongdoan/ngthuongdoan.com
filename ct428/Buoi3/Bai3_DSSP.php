<?php
include_once "clearcache.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/styles/buoi3/dssp.css">
  <style>
    img {
      position: absolute;
      display: none;
      width: 100%;
      z-index: 10000;
    }

    .show-image {
      position: relative;
    }

    .show-image:hover img {
      display: block;
    }
  </style>

  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php
    echo "<h1>Chào bạn " . $_SESSION["tendangnhap"] . "</h1>";
    ?>
    <div>
      <input type="text" oninput="searchSP(this.value)">
      <ul id="searchResult">

      </ul>
    </div>
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
            echo "<tr id=" . $row["idsp"] . ">";
            echo "<td>" . $i . "</td>";
            echo "<td class='show-image'><div>" . $row["tensp"] . "<img src='" . $row["hinhanhsp"] . "'/></div></td>";
            echo "<td>" . $row["giasp"] . " (VNĐ)</td>";
            echo "<td onclick='xemChiTiet(" . $row["idsp"] . ")'><a style='cursor:pointer'>Xem chi tiết</a></td>";
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
  <div id="ttsp"></div>
  <script>
    const xemChiTiet = async (id) => {
      const container = document.getElementById("ttsp");
      container.innerHTML = "";

      const response = await fetch(`xemChiTiet.php?id=${id}`);
      const data = await response.json();

      for (let [key, value] of Object.entries(data)) {
        let p = document.createElement("div");
        if (key === 'hinhanhsp') {
          p.innerHTML = `<b>${key}: </b>`;
          let img = document.createElement("img");
          img.setAttribute("src", value);
          img.style.display = "block";

          p.appendChild(img)

        } else {
          p.innerHTML = `<b>${key}: </b> ${value}`;
        }
        container.appendChild(p);
      }
    }

    const searchSP = async (keyword) => {
      const container = document.getElementById("searchResult");
      container.innerHTML = "";
      if (keyword) {
        const response = await fetch(`searchSP.php?keyword=${keyword}`);
        const data = await response.json();
        const searchResult = Array.from(data);
        searchResult.forEach(result => {
          const li = document.createElement("li");
          const a = document.createElement("a");
          a.innerText = result.name;
          a.setAttribute("href", `xemsp.php?id=${result.id}`)
          a.style.textDecoration = "none";
          li.appendChild(a);
          container.appendChild(li)
        })
      }
    }
  </script>
</body>

</html>