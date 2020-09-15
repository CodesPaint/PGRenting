<?php

if (isset($_POST["register"])) {
    include_once 'DBConnect.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    $sql1 = "select * from user where email='$email'";
    
    $user = $db->query($sql1);
    $result = $user->fetchAll();
    
    if (empty($result)) {
        $sql = "insert into user (name,email, password) values('$name','$email','$password')";
        
        $db->exec($sql);
        
        $database->closeConnection();
        echo "<script>alert('Registered Successfully!');</script>";
        // header("Location: login.php");
    } else {
        echo "<script>alert('Email already in use!');</script>";
    }
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
  	</style>
    <script type="text/javascript">
      function check(){

        var passw=  /^[A-Za-z]\w{7,14}$/;
        if(inputtxt.value.match(passw)) 
          { 
          }
          else
          { 
          alert('Wrong...!')
          return false;
          }
        if(document.form1.password.value!=document.form1.cpassword.value)
         {
            alert("Confirm Password does not matched");
            document.form1.cpassword.focus();
            return false;
          }
      }
    </script>
  </head>

  <body>
<?php include 'header.php' ?>

<div class="container">
	<div class="row" style="margin-left: 70%; margin-top: 1%;">
		<form class="form-signin mg-btm" action="" method="POST" name="form1" onsubmit="return check()">
    	<h3 class="heading-desc">Signup</h3>

		<div class="main">	
        
		<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required" autofocus>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" required="required">
    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" required="required">
    <div class="">
    <pre>Accept terms & Conditions! <input type="checkbox" value="" required="required"> </pre>
     
    </div>    
    <div class="" style="margin-left: 75%;">
                <button type="submit" class="btn btn-large btn-danger" name="register">Register</button>
    </div>

    
        
		<span class="clearfix"></span>	
    </div>
  </form>

		<div class="login-footer">
		<div class="row"> 
            Are you a vendor? <a href="./vendor/home.php"> Get started here</a>
        </div>
		
		</div>
      
	</div>
</div>


<?php include 'footer.php' ?>


</body>
</html>