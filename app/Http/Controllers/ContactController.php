<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController extends Controller {
    
    public function contact(Request $request){
    	$campo= $request->all();


    	$mail = new PHPMailer;
		// notice the \ you have to use root namespace here
		try {
		$mail->isSMTP(); // tell to use smtp
		$mail->CharSet = "utf-8"; // set charset to utf8
		$mail->Host = 'a2plcpnl0869.prod.iad2.secureserver.net';
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587; // most likely something different for you. This is the mailtrap.io port i use for testing. 
		
		$mail->Username = "contacto@elesud.com";
		$mail->Password = "*contact2018*";

		$mail->From     = "contacto@elesud.com";
        $mail->FromName = "Elevadores Sudamericanos Contacto";
		
		$mail->Subject = "Solicitud de Información";
		 $mail->WordWrap = 50;

        $mail->AddAddress("eric@juliochirinos.com"); 
        $mail->AddBCC("ep.luisjesus@gmail.com");
        
        $mail->IsHTML(TRUE);
    
        $mail->Body = '<!DOCTYPE html>
						<html lang="en">
						<head>
						    <meta charset="UTF-8">
						    <title>Información</title>
						</head>
						<body>
						    <span>Informacion</span>
						    <br>
						    <p><b>Nombre: </b>'.($campo['name']!= null?$campo['name']:'').'</p>
						    <br>
						    <p><b>Apellido:</b> '. ($campo['lname'] != null?$campo['lname']:'').'</p>
						    <br>
						    <p><b>Telefono:</b>  '.($campo['email']!=null?$campo['email']:'').'</p>
						    <br>
						    <p><b>Correo:</b>  '.($campo['phone']!= null?$campo['phone']:'').'</p>
						    <br>
						    <p><b>Mensaje:</b> '.($campo['message']!=null?$campo['message']:'').'</p>
						    <br>
						</body>
						</html>';

		

		$mail->send();
		} catch (phpmailerException $e) {
		return $e;
		} catch (Exception $e) {
		return $e;
		}
		return 'Enviado con exito';
		    }

}
