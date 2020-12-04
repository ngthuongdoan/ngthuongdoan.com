<?php
session_start();
?>
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
  if (isset($_GET['action'])) echo "<p>Đăng ký thành công</p>";
  if (isset($_SESSION["matv"])) header('Location: TTCN.php');
  ?>
  <form action="dangnhap.php" method="post" id="form">
    <table>
      <tr>
        <td>
          <label for="username">Tên đăng nhập: </label>
        </td>
        <td>
          <input type="text" name="tendangnhap" id="username" required />
          <p id="username-error"></p>

        </td>
      </tr>
      <tr>
        <td>
          <label for="password">Mật khẩu: </label>
        </td>
        <td>
          <input type="password" name="matkhau" id="password" required />
          <p id="password-error"></p>
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
  <script>
    const form = document.getElementById("form");
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    let usernameError = document.getElementById("username-error");
    let passwordError = document.getElementById("password-error");
  </script>
</body>

</html>