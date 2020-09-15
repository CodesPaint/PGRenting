<?php
session_start();
if (isset($_SESSION['cvenname']) or isset($_SESSION['cvenid'])) {
    unset($_SESSION['cvenname']);
    unset($_SESSION['cvenid']);

}

session_destroy();
header('location:home.php');
?>