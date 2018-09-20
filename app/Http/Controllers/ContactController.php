<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController extends Controller {
    
    public function contact(Request $request){
    	$mail = new PHPMailer;
		// notice the \ you have to use root namespace here
		try {
		$mail->isSMTP(); // tell to use smtp
		$mail->CharSet = "utf-8"; // set charset to utf8
		$mail->Host = 'localhost';
		$mail->SMTPAuth = false;
		$mail->SMTPSecure = false;
		$mail->Port = 25; // most likely something different for you. This is the mailtrap.io port i use for testing. 
		$mail->Username = "root";
		$mail->Password = "";
		$mail->setFrom("ep.luisjesus@gmail.com", "examle Team");
		$mail->Subject = "examle";
		$mail->MsgHTML("This is a test new test ");
		$mail->addAddress("ep.luisjesus@gmail.com", "admin");
		//$mail->addAddress("examle@gmail.com", "test");
		//$mail->addReplyTo('examle@examle.net', 'Information');
		//$mail->addBCC('examle@examle.net');
		//$mail->addAttachment('/home/kundan/Desktop/abc.doc', 'abc.doc'); // Optional name
		$mail->SMTPOptions= array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
		);

		$mail->send();
		} catch (phpmailerException $e) {
		return $e;
		} catch (Exception $e) {
		return $e;
		}
		return 'Enviado con exito';
		    }

}
