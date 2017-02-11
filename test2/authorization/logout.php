<?php
session_start();
setcookie('username', '', time() - 60 * 60 * 60 * 24 * 365);
session_unset();
session_destroy();
header("location: ../index.php");
?>
