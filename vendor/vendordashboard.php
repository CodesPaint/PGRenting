<?php

    session_start();
    function is_dir_empty($dir) {
      if (!is_readable($dir)) return NULL; 
      return (count(scandir($dir)) == 2);
    }

    if(!isset($_SESSION['cvenname']) or !isset($_SESSION['cvenid'])){
         header('location: home.php');
    }
    $op=$_GET['op'];
    $flg=-1;
    if(strpos($_SERVER['REQUEST_URI'], "act") !== false){
        $flg=1;
        $act=$_GET['act'];
        if($act=="register"){
                $companyname=$_POST['pgname'];
                $vendorid=$_POST['vendorid'];
                echo "<script>alert('$vendorid');</script>";
                $address=$_POST['address'];
                $city=$_POST['city'];
                $state=$_POST['state'];
                if(isset($_POST['meals'])){
                    $meals="Yes";
                }else{
                    $meals="No";
                }
                if(isset($_POST['television'])){
                    $television="Yes";
                }else{
                    $television="No";
                }
                if(isset($_POST['furnished'])){
                    $furnished="Yes";
                }else{
                    $furnished="No";
                }
                if(isset($_POST['parking'])){
                    $parking="Yes";
                }else{
                    $parking="No";
                }
                if(isset($_POST['security'])){
                    $security="Yes";
                }else{
                    $security="No";
                }
                
                $housefor=$_POST['housefor'];
                $rentpermonth=$_POST['rentpermonth'];
                $foldername="pg".$vendorid;
                $dir="media/pghouse/$foldername";
                if(is_dir_empty($dir)){
                    $completed="No";
                }else{
                    $completed="Yes";
                }
                
                
            }else if($act=="gallery"){
                $vendorid=-1;
                if(isset($_SESSION['cvenname']) and isset($_SESSION['cvenid'])){
                    $vendorid=$_SESSION['cvenid'];
                }
                if($photo1!=none&&$photo2!=none&&$photo3!=none){

                }else{
                    echo "<script>alert('Error in Files! Try Again.');</script>";
                    echo "<script type='text/javascript'>window.open('vendordashboard.php?op=gallery','_parent'); </script>";
                }
                $foldername="media/pghouse/pg".$vendorid;

                $file_name1 = $HTTP_POST_FILES['photo1']['name'];
                $ext1 = substr($file_name1, strrpos($file_name1, '.') + 1);
                $new_file_name1="main.".$ext1;
                $path1= $foldername.$new_file_name1;

                $file_name2 = $HTTP_POST_FILES['photo2']['name'];
                $ext2 = substr($file_name2, strrpos($file_name2, '.') + 1);
                $new_file_name2="room1.".$ext2;
                $path2= $foldername.$new_file_name2;

                $file_name3 = $HTTP_POST_FILES['photo3']['name'];
                $ext3 = substr($file_name3, strrpos($file_name3, '.') + 1);
                $new_file_name3="room2.".$ext3;
                $path3= $foldername.$new_file_name3;

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
        <?php include "vendordashboardheader.php"; ?>

        <?php include "vendordashboardsidebar.php"; ?>


    <div class="main-body-content w-100 ets-pt">
        <?php 

            if($op=="profile"){
                include "empprofile.php";
            }else if($op=="pghouse"){
                include "vendorpghouse.php";
            }else if($op=="gallery"){
                include "vendorgallery.php";
            }else if($op=="membership"){
                include "empenquiry.php";
            }else if($op=="settings"){
                include "empsetting.php";
            }

        ?>
</div>
</div>
   

  </body>
</html>

