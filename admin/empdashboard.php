<?php
    session_start();
    if(!isset($_SESSION['cempname']) or !isset($_SESSION['cempid'])){
         header('location: emplogin.php');
    }
    $op=$_GET['op'];
    $flg=-1;
    if (strpos($_SERVER['REQUEST_URI'], "act") !== false){
        $flg=1;
        $act=$_GET['act'];
        if($act=="update"){
            $status=$_POST['status'];
            $email=$_POST['email'];
            $encemail=$_POST['encemail'];        
            $vendorid=$_POST['vendorid'];
        }else if($act=="reply"){
            $reply=$_POST['reply'];
            $email=$_POST['email'];
            $queryid=$_POST['queryid'];
            $query=$_POST['query'];
        }
        
        // echo "<script>alert('".$vendorid."');</script>";
    }



?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">
	<title>Amaya Suite</title>
	<?php include 'base.php' ?>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main1.css">
	<script>
    jQuery(document).ready(function(){
            jQuery("#open-menu").click(function(){
                if(jQuery('#page-container').hasClass('show-menu')){
                jQuery("#page-container").removeClass('show-menu');
            }
                
                else{
                jQuery("#page-container").addClass('show-menu');
                }
            });
        });
    </script>
  </head>
  <body style="margin-top: -6%;">
    <div id="page-container" class="main-admin">
        <?php include "dashboardheader.php"; ?>

        <?php include "dashboardsidebar.php"; ?>


    <div class="main-body-content w-100 ets-pt">
        <?php 
            if($op=="profile"){
                // include "empprofile.php";
            }else if($op=="requests"){
                include "emprequests.php";
            }else if($op=="queries"){
                include "empenquiry.php";
            }else if($op=="settings"){
                include "empsetting.php";
            }

        ?>
</div>
</div>
   

  </body>
</html>

