<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require_once "library/PHPMailer.php";
	require_once "library/Exception.php";
	require_once "library/OAuth.php";
	require_once "library/POP3.php";
	require_once "library/SMTP.php";
 
	$mail = new PHPMailer;
 
	//Enable SMTP debugging. 
	$mail->SMTPDebug = 3;                               
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = "smtp.gmail.com"; //host mail server
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = "inadarmayanti94@gmail.com";   //nama-email smtp          
	// $mail->Password = "oafz ydnk xedo lqzm";           //password email smtp
	$mail->Password = "darmajaya21";           //password email smtp
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to 
	$mail->Port = 587;                                   
 
	$mail->From = "inadarmayanti94@gmail.com"; //email pengirim
	$mail->FromName = "Ini adalah PHPmailer"; //nama pengirim
 
	 $mail->addAddress('setioadinataarianto21@gmail.com', 'Setio'); //email penerima
 
	$mail->isHTML(true);
 
	$mail->Subject ='TESTING'; //subject
    $mail->Body    ='Okeee'; //isi email
    $mail->AltBody = "PHP mailer"; //body email (optional)
	$mail->send();


?>
