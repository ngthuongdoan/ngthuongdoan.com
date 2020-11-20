<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/buoi3/dangnhap.css">
    <title>Document</title>
  </head>
  <body>
    <?php
    if(isset($_GET['action'])) echo "<p>Đăng ký thành công</p>";
    if(isset($_COOKIE["matv"])) header('Location: TTCN.php');
    ?>
    <form action="dangnhap.php" method="post">
      <table>
        <tr>
          <td>
            <label for="">Tên đăng nhập: </label>
          </td>
          <td>
          <input type="text" name="tendangnhap" id="" />
          </td>
        </tr>
        <tr>
          <td>
          <label for="">Mật khẩu: </label>

          </td>
          <td>
          <input type="password" name="matkhau" id="" />
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
          <input type="submit" value="Đăng nhập" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
