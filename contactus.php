
<?php 
session_start(); 

if (isset($_POST["send"])) {
    include_once 'DBConnect.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message=$_POST['msg'];
	date_default_timezone_set('Asia/Kolkata');
	$cdate=date('Y-m-d', strtotime(str_replace('-', '/', date("m/d/Y"))));
	$ctime=date('H:i:s', strtotime("now"));
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    $sql = "insert into query (name,email,phone,message,qdate,qtime) values('$name','$email','$phone','$message','$cdate','$ctime')";
        
    $db->exec($sql);
        
    $database->closeConnection();
    echo "<script>alert('Message Sent Successfully!');</script>";
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
		body{
		    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
		}
		.contact-form{
		    background: #fff;
		    margin-top: 10%;
		    margin-bottom: 5%;
		    width: 70%;
		}
		.contact-form .form-control{
		    border-radius:1rem;
		}
		.contact-image{
		    text-align: center;
		}
		.contact-image img{
		    border-radius: 6rem;
		    width: 11%;
		    margin-top: -3%;
		    transform: rotate(29deg);
		}
		.contact-form form{
		    padding: 14%;
		}
		.contact-form form .row{
		    margin-bottom: -7%;
		}
		.contact-form h3{
		    margin-bottom: 8%;
		    margin-top: -10%;
		    text-align: center;
		    color: #0062cc;
		}
		.contact-form .btnContact {
		    width: 50%;
		    border: none;
		    border-radius: 1rem;
		    padding: 1.5%;
		    background: #dc3545;
		    font-weight: 600;
		    color: #fff;
		    cursor: pointer;
		}
		.btnContactSubmit
		{
		    width: 50%;
		    border-radius: 1rem;
		    padding: 1.5%;
		    color: #fff;
		    background-color: #0062cc;
		    border: none;
		    cursor: pointer;
		}
	</style>
  </head>
  <body>

<?php include 'header.php' ?>
   

<div class="container contact-form">
            <div class="contact-image">
                <img src="assets/images/logo1.png" alt="Amaya"/>
                <!-- or "assets/images/rocket_contact.png" -->
            </div>
            <form method="post" action="" name="form1">
                <h3>Drop Us a Message for Queries</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" required />
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" placeholder="Your Phone Number *" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="send" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>


<?php include 'footer.php' ?>


  </body>
</html>

