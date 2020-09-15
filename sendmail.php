<?php	


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


		 
	function sendMsg($email,$message_body,$subject) {
		 require('PHPMailer/src/PHPMailer.php');
		 require('PHPMailer/src/SMTP.php');
		 require('PHPMailer/src/Exception.php');
		
		
		$mail = new PHPMailer;
		try{
			$mail->IsSMTP();
			$mail->SMTPDebug = 0;
			$mail->SMTPAuth = TRUE;
			$mail->SMTPSecure = 'tls'; // tls or ssl
			$mail->Port     = 587;
			$mail->Username = "loghorizonpoint@gmail.com";
			$mail->Password = "soypra02";
			$mail->Host     = "smtp.gmail.com";
			$mail->Mailer   = "smtp";
			$mail->SetFrom("loghorizonpoint@gmail.com", "Amaya");
			$mail->AddAddress($email);
			$mail->Subject = $subject;
			$mail->MsgHTML($message_body);
			$mail->IsHTML(true);		
			$result = $mail->Send();
			
		}catch(Exception $e){

			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		return $result;
	}
?>