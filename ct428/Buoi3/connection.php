<?php
global $conn;
function openconnect()
{
    $GLOBALS["conn"] = new mysqli("localhost", "root", "rootpassword", "buoi3") or die;
    // $GLOBALS["conn"] = new mysqli("localhost", "id15079877_ngthuongdoan", "VUL3wN$2B+kU92Ba", "id15079877_ct428") or die;
    $GLOBALS["conn"]->set_charset("utf8");
}

function closeconnect()
{
    $GLOBALS["conn"]->close();
}
