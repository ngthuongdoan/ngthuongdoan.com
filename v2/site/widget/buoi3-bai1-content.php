<body>
  <div class="container">
    <h2>Đăng ký tài khoản mới</h2>
    <br />
    <p>Vui lòng điền đầy đủ thông tin bên dưới để đăng ký tài khoản mới</p>
    <br />
    <form action="site/database/saveThanhVien.php" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
          <td><label for="username">Tên đăng nhập</label></td>
          <td><input type="text" id="username" name="tendangnhap" /></td>
        </tr>
        <tr>
          <td><label for="password">Mật khẩu</label></td>
          <td><input type="password" id="password" name="matkhau" /></td>
        </tr>
        <tr>
          <td><label for="confirm-password">Gõ lại mật khẩu</label></td>
          <td><input type="password" id="confirm-password" /></td>
        </tr>
        <tr>
          <td><label for="avatar">Hình đại diện</label></td>
          <td><input type="file" id="avatar" name="hinhanh" /></td>
        </tr>
        <tr>
          <td><label for="gender">Giới tính</label></td>
          <td>
            <input type="radio" name="gioitinh" id="nam" value="nam" />
            <label for="nam">Nam</label>
            <input type="radio" name="gioitinh" id="nu" value="nu" />
            <label for="nu">Nữ</label>
            <input type="radio" name="gioitinh" id="khac" value="khác" />
            <label for="khac">Khác</label>
          </td>
        </tr>
        <tr>
          <td><label for="job">Nghề nghiệp</label></td>
          <td>
            <select name="nghenghiep" id="">
              <option value="Học sinh" selected>Học sinh</option>
              <option value="Giảng viên">Giảng viên</option>
              <option value="Bảo vệ">Bảo vệ</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="">Sở thích</label></td>
          <td>
            <input type="checkbox" name="sothich[]" id="" value="Thể thao" />
            <label for="">Thể thao</label>
            <input type="checkbox" name="sothich[]" id="" value="Du lịch" />
            <label for="">Du lịch</label>
            <input type="checkbox" name="sothich[]" id="" value="Âm nhạc" />
            <label for="">Âm nhạc</label>
            <input type="checkbox" name="sothich[]" id="" value="Thời trang" />
            <label for="">Thời trang</label>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Đăng ký" />
            <button type="button">Làm lại</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>