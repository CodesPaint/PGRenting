

<!-- Adimin : loghorizonpoint
Password: admin
 -->
<?php
  if(isset($_POST['add'])){
    include_once '../DBConnect.php';
    require_once "../sendmail.php";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $authpass=$_POST['password'];
    $type="Employee";
    
    
    $database = new dbConnect();
    $db = $database->openConnection();
    $sql = "select * from employee order by eid desc limit 1";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $result[0]['eid'];
    $id=$id+1;
    
    
    $password="@".substr($email, 0, strpos($email, '@')).$id;
    $encodedpassword = md5($password);
    $encodedauthpass=md5($authpass);

    $sql1 = "select * from employee where email='$email' or phone='$phone'";
    $emp = $db->query($sql1);
    $result = $emp->fetchAll();
    if (empty($result)) {
        $sql2 = "select * from employee where password='$encodedauthpass' and type='Admin'";
        $auth = $db->query($sql2);
        $res = $auth->fetchAll();
        if(!empty($res)){
          $sql3= "insert into employee(name,email,phone,address,password,type) values('$name','$email','$phone','$address','$encodedpassword','$type')";
          $db->exec($sql3);
          $message_body = "Your Account Details:<br/><br/>Email: " . $email."<br/>Password: ".$password."<br/><br/>This message is confidential.Do not share it.";
          $subject="Account Access Details";
          $status=sendMsg($email,$message_body,$subject);
          echo '<script>alert("Record Added As Employee!");</script>';
          echo "<script type='text/javascript'>window.open('home.php', '_self'); </script>";
        }else{
          echo '<script>alert("Incorrect Authorization Password!");</script>';
        }  
    } else {
        echo "<script>alert('Email & Mobile are already in use!');</script>";
    }
    $database->closeConnection();
  }

?>
<!DOCTYPE HTML>
<html>
  <head>
    <link rel="icon" href="assets/images/logo1.png" type="image/x-icon">
	<title>Home </title>
  <?php include 'base.php' ?>
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


   
<div class="container">
    <div class="row">
        <div class="col-mid-4" style="margin-left: 50%;">
            <form action="" method="post" class="form1">
            <div class="get-in-touch">
                <h3 class="text-center">
                    Add Employee</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone No." required/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="address" name="address" placeholder="Address" required></textarea>
                </div>
                <!-- <div class="form-group">
                    <label>Employee Type</label>  &ensp;&ensp;
                    <input type="radio" class="" id="type" name="type" value="Admin" required /> Admin &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    <input type="radio" class="" id="type" name="type" value="Employee" required /> Employee
                </div> -->
                
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Admin Password" required/>
                </div>


                <button type="submit" class="btn btn-danger btn-sm btn-block" name="add">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>






<?php include 'footer.php' ?>


  </body>
</html>