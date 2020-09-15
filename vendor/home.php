<?php

session_start();


if (isset($_POST["request"])) {
    include_once 'DBConnect.php';
    
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $type = $_POST['type'];
    $status="Pending";
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    $sql1 = "select * from vendorgetintouch where email='$email' or mobile='$mobile'";
    
    $vendor = $db->query($sql1);
    $result = $vendor->fetchAll();
    
    if (empty($result)) {
        $sql = "insert into vendorgetintouch (name,company,email,mobile,type,status) values('$name','$company','$email','$mobile','$type','$status')";
        
        $db->exec($sql);
        
        
        echo '<script>alert("Request Sent Successfully!\n You will be contacted later for further!");</script>';
       echo "<script type='text/javascript'>window.open('home.php', '_self'); </script>";
    } else {
        echo "<script>alert('Email & Mobile are already in use!');</script>";
    }
    $database->closeConnection();
}
?>

<?php

if (isset($_POST["login"])) {
    include_once 'DBConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from vendorgetintouch where email = '$email' and password= '$password' and status='Accepted'";
    $emp = $db->query($sql);
    $result = $emp->fetchAll(PDO::FETCH_ASSOC);
    if (empty($result)) {
        
        echo "<script>alert('Incorrect Username & Password!');</script>";
        echo "<script type='text/javascript'>window.open('home.php', '_parent'); </script>";
    } else {
        $id = $result[0]['vendorid'];
        $name = $result[0]['name'];
        $email = $result[0]['email'];
        $_SESSION['cvenname'] = $name;
        $_SESSION['cvenid'] = $id;
    }
    $database->closeConnection();
    echo "<script type='text/javascript'>window.open('vendordashboard.php?op=pghouse','_parent'); </script>";
}
?>

<?php
 
  if(isset($_POST['resetpassword'])){
    include_once '../EncodeDecode.php';
    $email=$_POST['remail'];
    $enc=new EncodeDecode();

    $encodedemail=$enc->encode($email);
    
    $resetlink="http://localhost/Project/vendor/resetpassword.php?liame=".$encodedemail;
    $message_body = "One Time Password Reset Link is:<br/><br/>" . $resetlink;
    $subject="Reset Password";
    require_once '../sendmail.php';
    $result=sendMsg($email,$message_body,$subject);

    // http://localhost/Project/resetpassword.php?liame=dWWJppe5qt33Zswkt/i2UePznFVwATg=
    
  
    
  }
?>




<?php include 'base.php' ?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">
	<title>Home </title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<style type="text/css">
		body{margin-top:50px;background: rgb(36, 39, 41);}
.get-in-touch {
position: relative;
margin: 0 auto;
padding: 30px;
width: 550px;
border-radius: 2px;
background: rgb(255, 255, 255);
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.get-in-touch input[type=text],.get-in-touch input[type=email], .get-in-touch textarea {
background: rgb(235, 241, 245);
color: rgb(36, 39, 41);
}
.get-in-touch  input:focus, .get-in-touch  textarea:focus {
outline: 0;
background: #FFF;
}

	</style>
  </head>
  <body>

<?php include 'header.php' ?>
   
<div class="container">
    <div class="row">
        <div class="col-mid-4" style="margin-left: 50%;">
            <form action="#" method="post" class="form">
            <div class="get-in-touch">
                <h3 class="text-center">
                    Get in Touch</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" required/>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required/>
                </div>
                <div class="form-group">
                    <label>Vendor for</label>  &ensp;&ensp;
                    <input type="radio" class="" value="Hotel" id="vendortype" name="type" required /> Hotel &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    <input type="radio" class="" value="Pg" id="vendortype" name="type" required /> PG House
                </div>
                
                <button class="btn btn-danger btn-sm btn-block" type="submit" name="request">REQUEST A CALL BACK</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    
    
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="color: red;">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          <form method="post" action="home.php">
          <input type="email" id="email" name="email" class="form-control validate">
          
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          <input type="password" id="password" name="password" class="form-control validate">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <button class="btn btn-light" data-toggle="modal" data-target="#modalForgotPasswordForm" style="color: rgb(225, 0, 0);">Forgot Password?</button>        
      </div>
    </div>
  

  </div>
</div>



<div class="modal fade" id="modalForgotPasswordForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="color: red;">Reset password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          <form method="post" action="home.php">
          <input type="email" id="remail" name="remail" class="form-control validate">
          
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="resetpassword" class="btn btn-primary" data-toggle="modal" data-target="#modalResetDialog">Reset</button>  
      </form>
        </div>  
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modalResetDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="color: red; font-size: 18px;">Reset password link has been sent to registered email id!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" data-dismiss="modal">Close</button>    
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php' ?>


  </body>
</html>