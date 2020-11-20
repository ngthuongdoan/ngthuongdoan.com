<?php
foreach ($_POST as $data => $value) {
    if ($data == 'sothich') {
        setSESSION($data, implode(",", $value));
    } else if ($data == 'matkhau') {
        setSESSION($data, md5($value));
    } else {
        setSESSION($data, $value);
    };
};
header("Location: /site/action/ct428/Buoi3/Bai1/ttcn.php");
