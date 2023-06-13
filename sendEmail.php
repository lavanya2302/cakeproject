<?php
use PHPMailer/PHPMailer/PHPMailer;
if(isset($_POST['name']) && isset($_POST['email']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$body=$_POST['body'] ;
	
	require_once="PHPMailer/PHPMailer.php";
	require_once="PHPMailer/SMTP.php";
	require_once="PHPMailer/Exception.php";
	
	$mail=new PHPMailer();
	
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->SMTPAuth=true;
	$mail->Username="pallavitagare123@gmail.com";
	$mail->Password="pallavi1572000";
	$mail->Port=465;
	$mail->SMTPSecure ="ssl";
	
	$mail->isHTML(true);
	$mail->setFrom($email,$name);
	$mail->addAddress("pallavitagare123@gmail.com");
	$mail->Subject=("$email ($subject)");
	$mail->Body=$body;
	
	if($mail->send()){
		$status="success";
		$response="Email is send";
	}else{
		$status="failed";
		$response="Something is wrong:<br>" .$email->ErrorInfo;
	} 
	exit(json_encode(array("status"=>$status,"response"=>$response)));
}
?>