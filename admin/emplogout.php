<?php
session_start();
if (isset($_SESSION['cempname']) or isset($_SESSION['cempid'])) {
    unset($_SESSION['cempname']);
    unset($_SESSION['cempid']);

}

session_destroy();
header('location:emplogin.php');
?>