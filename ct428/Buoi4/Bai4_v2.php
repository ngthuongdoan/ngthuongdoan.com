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
            <h1>Bài 2 - Buổi 4</h1>
        </div>
        <!--end div title-->
        <div id="menu">
            <!-- chèn menu của sinh viên vào-->
        </div>
        <!--end div menu-->
        <div id="content">
            <!--Nội dung trang web-->
            <h1>Slide show</h1>

            <form>
                <img id="laptopImg" src="" height="300" width="300" />
                <br />
                <input type="button" name="previous" value="Previous" onclick="changeSlide(-1)" />
                <input type="button" name="next" value="Next" onclick="changeSlide(1)" />
                <br />
                <select name="laptopSel" id="laptopSel" onchange="chooseSlide(value)">
                </select>
            </form>
            <p>
                Yêu cầu:<br />
                Có 4 hình ảnh về máy tính đính kèm, mặc định hiển thị hình máy HP.<br />
            </p>

            <ul>
                <li>
                    Khi người dùng nhấn Next thì hiển thị hình tiếp theo (theo thứ tự Hp
                    -> Dell -> Acer -> Asus).
                </li>
                <li>Khi người dùng nhấp Previous thì hiển thị hình trước đó.</li>
                <li>
                    Cả nút Next và Previous đều hiển thị vòng tròn (nếu đang xem hình HP
                    mà nhấn Previous thì sẽ chuyển sang hình Asus).
                </li>
                <li>
                    Người dùng có thể chọn xem một hình nào đó từ danh sách bên dưới nút
                    Previous và Next.
                </li>
                <li>
                    Khi người dùng thay đổi hình bằng cách nhấn Previous hoặc Next thì
                    tên hiển thị bên dưới cũng thay đổi theo.
                </li>
            </ul>
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
    <script>
        var IMAGE = [];
        var NAMES = [];
        <?php
        include_once "../Buoi3/connection.php";
        openconnect();
        $id = $_SESSION['matv'];
        $sql = "SELECT * FROM sanpham WHERE idtv=$id";
        $result = $conn->query($sql) or die($conn->error);
        closeconnect();
        $names = array();
        $imgSrc = array();

        while ($row = $result->fetch_assoc()) {
            array_push($names, $row['tensp']);
            array_push($imgSrc, $row['hinhanhsp']);
        }

        for ($i = 0; $i < count($names); $i++) {
            echo "NAMES[$i] = '$names[$i]';\n";
            echo "IMAGE[$i] = '../Buoi3/$imgSrc[$i]';\n";
        }
        ?>

        var laptopImg = document.getElementById("laptopImg");
        var laptopSel = document.getElementById("laptopSel");

        NAMES.forEach((n, index) => {
            var opt = document.createElement("option");
            opt.setAttribute("value", index);
            opt.innerText = n;
            laptopSel.appendChild(opt);
        });

        function changeSlide(pos) {
            // sinh vien tu viet code cho changeSlide:
            // pos = 1: hien thi file anh tiep theo
            // pos = -1: hien thi file anh truoc do
            var currentPos = +laptopSel.value;
            laptopSel.value += pos;
            if (currentPos + +pos < 0) {
                chooseSlide(3);
            } else {
                chooseSlide(currentPos + +pos);
            }
        }

        function chooseSlide(pos) {
            // sinh vien tu viet code cho chooseSlide:
            // pos = x: hien thi file anh x
            if (pos >= IMAGE.length) {
                laptopSel.value = 0;
            } else {
                laptopSel.value = +pos;
            }
            laptopImg.setAttribute("src", IMAGE[laptopSel.value]);
        }
    </script>
</body>

</html>