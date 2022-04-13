<?php 
error_reporting(0);
session_start();
class functions {
public function fetch_EmailByRegemail($email)
	{
			require 'phpmailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();  
			$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
			$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
			$mail->SMTPAuth = true;                     // Enable SMTP authentication
			$mail->Username = 'karthikannan0207@gmail.com';          // SMTP username
			$mail->Password = '9488244894'; // SMTP password
			$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;
			$mail->setFrom('karthikannan0207@gmail.com', 'karthik');
			$mail->addAddress(''.$email.'');   // Add a recipient

			$mail->isHTML(true);  // Set email format to HTML

			$mail->Subject = 'Email from karthik';
			$message = 'Thanks for Login jkhuiuyihihjuuiydfyuydfyfyduiyu8yujgyrfuyggutuioukjkghuytg8yih';
			$mail->Body    = $message;
			if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo 'Message has been sent';
			}
	}
	//used
}
$functionObj = new functions();
?>