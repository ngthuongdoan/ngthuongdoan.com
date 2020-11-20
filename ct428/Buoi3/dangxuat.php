<?php
setcookie("matv", "", time()-3600);
setcookie("tendangnhap", "", time()-3600);
header("Location: Bai2.php");