<?php
function openconnect()
{
    $GLOBALS['conn'] = mysqli_connect("127.0.0.1", "root", "rootpassword", "Buoi3");

    if (!$GLOBALS['conn']) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
}

function closeconnect()
{
    mysqli_close($GLOBALS['conn']);
}
