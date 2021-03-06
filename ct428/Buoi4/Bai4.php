<?php
include_once '../Buoi3/clearcache.php';
?>
<!DOCTYPE html>

<html>

<head>
    <title>Lập trình web (CT428)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
    <div id="wrap">
        <div id="title">
            <h1>Bài 3 - Buổi 4</h1>
        </div>
        <!--end div title-->
        <div id="menu">
            <!-- chèn menu của sinh viên vào-->
        </div>
        <!--end div menu-->
        <div id="content">
            <!--Nội dung trang web-->
            <h1>Quảng cáo</h1>

            <a href="http://www.hp.com" target="_blank" id="link">
                <img id="imgSrc" name="laptopImg" src="img/hp.jpg" height="300" width="300" onmouseover="pauseTimer()" onmouseout="activateTimer()" />
            </a>

            <p>
                Yêu cầu:<br />
                Có 4 hình ảnh của 4 công ty muốn quảng cáo đính kèm. Đầu tiên hiển thị
                một hình, cứ 2 giây thì thay hình ảnh khác, xoay vòng giữa 4 hình ảnh
                đã cho.<br />
                Khi người dùng rê chuột lên hình nào thì hình đó dừng lại không thay
                đổi để người dùng đọc thông tin về quảng cáo đó, khi nào người dùng rê
                chuột khỏi thì 2 giây sau mới cho hiển thị hình tiếp theo.<br />
                Khi người dùng click vào hình nào thì liên kết đến website của hình đó
                ở cửa sổ mới.
            </p>
        </div>
        <!--end div content-->
        <div id="footer">
            <p>
                Họ tên SV: Đoàn Ngọc Thưởng<br />
                Email: thuongb1704776@student.ctu.edu.vn
            </p>
        </div>
        <!--end div footer-->
    </div>
    <!--end div wrap-->
    <script>
        let IMAGE = [];
        <?php
        include_once "../Buoi3/connection.php";
        openconnect();
        $id = $_SESSION['matv'];
        $sql = "SELECT * FROM sanpham WHERE idtv=$id";
        $result = $conn->query($sql) or die($conn->error);
        closeconnect();
        $imgSrc = array();

        while ($row = $result->fetch_assoc()) {
            array_push($imgSrc, $row['hinhanhsp']);
        }

        for ($i = 0; $i < count($imgSrc); $i++) {
            echo "IMAGE[$i] = '../Buoi3/$imgSrc[$i]';\n";
        }
        ?>
        const imgSrc = document.getElementById("imgSrc");
        // const link = document.getElementById("link");

        var interval,
            i = 0;

        function slideshow() {
            /* ... logic ... */
            imgSrc.setAttribute("src", IMAGE[i]);
            // link.setAttribute("href", IMAGE[i].link);

            if (i < IMAGE.length - 1) i++;
            else i = 0;
        }
        if (IMAGE.length > 0)
            interval = setInterval(slideshow, 2000);

        function pauseTimer() {
            clearInterval(interval);
        }

        function activateTimer() {
            interval = setInterval(slideshow, 2000);
        }
    </script>
</body>

</html>