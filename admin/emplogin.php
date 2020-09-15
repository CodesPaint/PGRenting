<?php
session_start();
if (isset($_POST["login"])) {
    include_once '../DBConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from employee where email = '$email' and password= '$password'";
    $emp = $db->query($sql);
    $result = $emp->fetchAll(PDO::FETCH_ASSOC);
    if (empty($result)) {
        
        echo "<script>alert('Incorrect Username & Password!');</script>";
        echo "<script type='text/javascript'>window.open('emplogin.php', '_parent'); </script>";
    } else {
        $id = $result[0]['eid'];
        $name = $result[0]['name'];
        $email = $result[0]['email'];
        $_SESSION['cempname'] = $name;
        $_SESSION['cempid'] = $id;
    }
    $database->closeConnection();
    echo "<script type='text/javascript'>window.open('empdashboard.php?op=requests','_parent'); </script>";
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">
	<title>Amaya Suite</title>
  <?php include 'base.php' ?>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
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
  </head>

  <body>

<div class="container">
	<div class="row" style="margin-left: 70%; margin-top: 1%;">
		<form class="form-signin mg-btm" action="" method="POST">
    	<h3 class="heading-desc">
		
		Login</h3>
		
		<div class="main">	
        
		<input type="text" class="form-control" placeholder="Email"  name="email" id="email" required="required" autofocus>
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required">
		<div class="" style="margin-left: 75%;">
                <button type="submit" class="btn btn-large btn-danger" name="login">Login</button>
        </div>
        <div class="">
            <div class="left-section">
				<a href="forgotpassword.php">Forgot your password?</a>
				
			</div>
        </div>
        
		<span class="clearfix"></span>	
        </div>
      </form>
		
      
	</div>
</div>


<?php include 'footer.php' ?>


  </body>
</html>