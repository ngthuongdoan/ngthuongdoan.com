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
  <div class="container">
    <h2>Thêm sản phẩm mới</h2>
    <br />
    <p>Vui lòng điền đầy đủ thông tin bên dưới để thêm sản phẩm mới</p>
    <br />
    <form action="themsanpham.php" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
          <td><label for="username">Tên sản phẩm</label></td>
          <td><input type="text" id="username" name="tensp" /></td>
        </tr>
        <tr>
          <td><label for="password">Chi tiết sản phẩm</label></td>
          <td><textarea name="chitietsp" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
          <td><label for="confirm-password">Giá sản phẩm</label></td>
          <td><input type="number" id="confirm-password" name="giasp" /></td>
        </tr>
        <tr>
          <td><label for="avatar">Hình đại diện</label></td>
          <td><input type="file" id="avatar" name="hinhanhsp" /></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Lưu sản phẩm" />
            <button type="button">Làm lại</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>