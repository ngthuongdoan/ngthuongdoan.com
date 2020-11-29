<?php
session_start();
if (!array_key_exists('matv', $_SESSION) && empty($_SESSION['matv'])) {
    header("Location: Bai2.php");
}
