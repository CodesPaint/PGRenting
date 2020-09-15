<?php
  session_start();
  if(isset($_POST['sendlink'])){
    include_once 'EncodeDecode.php';
    $email=$_POST['email'];
    $enc=new EncodeDecode();

    $encodedemail=$enc->encode($email);
    
    $resetlink="http://localhost/Project/resetpassword.php?liame=".$encodedemail;
    $message_body = "One Time Password Reset Link is:<br/><br/>" . $resetlink;
    $subject="Reset Password";
    require_once 'sendmail.php';
    $result=sendMsg($email,$message_body,$subject);

    // http://localhost/Project/resetpassword.php?liame=dWWJppe5qt33Zswkt/i2UePznFVwATg=
    
  
    
  }
?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">
	<title>Amaya Suite</title>
  <?php include 'base.php' ?>
	<link rel="stylesheet" type="text/css" href="assets/css/main1.css">
  	<style type="text/css">
  		.form-signin {
  max-width: 400px; 
  display:block;
  background-color: #f7f7f7;
  -moz-box-shadow: 0 0 3px 3px #888;
    -webkit-box-shadow: 0 0 3px 3px #888;
	box-shadow: 0 0 3px 3px #888;
  border-radius:2px;
}
.main{
	padding: 38px;
}
.heading-desc{
	font-size:30px;
	font-weight:bold;
	padding:38px 38px 0px 38px;
	
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: 20px;
  padding: 20px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: 10px;
  border-radius: 5px;
  
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-radius: 5px;
}
.login-footer{
	background:#f0f0f0;
	margin: 0 auto;
	border-top: 1px solid #dadada;
	padding:20px;
}
.login-footer .left-section a{
	font-weight:bold;
	color:#8a8a8a;
	line-height:19px;
}
.mg-btm{
	margin-bottom:20px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
  	</style>
  </head>

  <body>

<?php include 'header.php' ?>
   
<div class="container">
	<div class="row" style="margin-left: 70%; margin-top: 1%;">
		<form class="form-signin mg-btm" name="form1" action="" method="POST">
    	<h3 class="heading-desc">
		
		Forgot Password</h3>
		

		<div class="main">	
        
		<input type="email" class="form-control" placeholder="Email" name="email"id="email" required="required" autofocus>
    <div class="" style="margin-left: 75%;">
                <button type="submit" class="btn btn-large btn-danger" name="sendlink">Send</button>
    </div><br/>
        <input type="number" class="form-control" placeholder="" style="letter-spacing: 30px;" disabled="disabled" >
<br/>
 <div class="" style="margin-left: 25%;">
                <button type="submit" class="btn btn-large btn-danger" disabled="disabled">Submit</button>
    </div>
        </div>
        
        </div>
</div>


<?php include 'footer.php' ?>


  </body>
</html>