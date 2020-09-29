<?php
require "phpmailer/Exception.php";
require "phpmailer/PHPMailer.php";
require "phpmailer/SMTP.php";

use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\Exception;
use phpmailer\phpmailer\SMTP;

$oMail= new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Port=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Usermail="cebjoseantoniodominguez2002@gmail.com";
$oMail->Password="JoseAntonio2002";
$oMail->setFrom("cebjoseantoniodominguez2002@gmail.com","CEB Jose Antonio Dominguez");
$oMail->addAddress("cebjoseantoniodominguez2002@gmail.com","CEB Jose Antonio Dominguez");
$oMail->Subject="mensaje";
$oMail->msgHTML("Hola soy un mensaje");

if($oMail->send())
	echo $oMail->ErrorInfo;


?>