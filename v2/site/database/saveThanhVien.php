<?php
foreach ($_POST as $data => $value) {
    if ($data == 'sothich') {
        setcookie($data, implode(",", $value));
    } else if ($data == 'matkhau') {
        setcookie($data, md5($value));
    } else {
        setcookie($data, $value);
    };
};
header("Location: /site/action/ct428/Buoi3/Bai1/ttcn.php");
