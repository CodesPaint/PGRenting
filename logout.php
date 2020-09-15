<?php
session_start();
if (isset($_SESSION['cname']) or isset($_SESSION['cid'])) {
    unset($_SESSION['cname']);
    unset($_SESSION['cid']);

}

session_destroy();
header('location:emplogin.php');
?>