<?php
include_once "clearcache.php";
?>
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
        include_once "connection.php";
        openconnect();
        echo "<h1>Chào bạn " . $_SESSION["tendangnhap"] . "</h1>";
        $id = $_SESSION['matv'];
        $sql = "SELECT * FROM thanhvien WHERE id=$id";
        $result = $conn->query($sql);
        closeconnect();
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td><img width='200px' src='" . $row["hinhanh"] . "'></td>";
            echo "<td style='vertical-align:top'>";
            echo "<p><b>Nickname: </b>" . $row['tendangnhap'] . "</p>";
            echo "<p><b>Giới tính: </b>" . $row['gioitinh'] . "</p>";
            echo "<p><b>Nghề nghiệp: </b>" . $row['nghenghiep'] . "</p>";
            echo "<p><b>Sở thích: </b>" . $row['sothich'] . "</p>";
        }
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