<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/buoi3/ttcn.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        if(!isset($_COOKIE["matv"])) header("Location: Bai2.php");
        $conn = new mysqli("localhost","root","rootpassword","buoi3") or die;
        $conn->set_charset("utf8"); 
        echo "<h1>Chào bạn ".$_COOKIE["tendangnhap"]."</h1>";
        $sql = "SELECT * FROM thanhvien WHERE id=".$_COOKIE['matv']."";
        $result = $conn->query($sql);
        echo "<table>";
        while($row = $result->fetch_assoc()){
            echo "<tr><td><img width='200px' src='".$row["hinhanh"]."'></td>";
            echo "<td style='vertical-align:top'>";
            echo "<p><b>Nickname: </b>".$row['tendangnhap']."</p>";
            echo "<p><b>Giới tính: </b>".$row['gioitinh']."</p>";
            echo "<p><b>Nghề nghiệp: </b>".$row['nghenghiep']."</p>";
            echo "<p><b>Sở thích: </b>".$row['sothich']."</p>";
        }
        $conn->close();
        ?>
        <a href="Bai3_ThemSP.php">Thêm sản phẩm</a>
        <a href="Bai3_DSSP.php">Danh sách sản phẩm</a>

        <form action="dangxuat.php" method="GET">
            <input type="submit" value="Đăng xuất">
        </form>
    </td>
    </tr>
    </table>
    </div>
</body>
</html>