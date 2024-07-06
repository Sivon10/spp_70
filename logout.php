<?php
session_start();
$_SESSION = [];
unset($_SESSION['level']);
session_unset();
session_destroy();
header("location:login.php");
