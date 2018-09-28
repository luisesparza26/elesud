<?php

namespace App\ Http\ Controllers;

use Illuminate\ Http\ Request;
use App\ Http\ Controllers\ Controller;
use PHPMailer\ PHPMailer\ PHPMailer;

class CotizacionController extends Controller {

	public function cotizar( Request $request ) {
		$campo = $request->all();

		//dd($campo);
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

			$mail->From = "contacto@elesud.com";
			$mail->FromName = "Elevadores Sudamericanos Contacto";

			$mail->Subject = "Solicitud de Cotización";
			$mail->WordWrap = 50;

			$mail->AddAddress( "eric@juliochirinos.com" );

			$mail->IsHTML( TRUE );

			$mail->Body = '<!DOCTYPE html>
						<html lang="en">
						<head>
						    <meta charset="UTF-8">
						    <title>Información</title>
						</head>
						<body>
						    <span>Información</span>
						     <p><b>Categoría:</b> ' . ( $campo[ 'categoria' ] != null ? $campo[ 'categoria' ] : '' ) . '</p>
						    <p><b>Producto:</b> ' . ( $campo[ 'producto' ] != null ? $campo[ 'producto' ] : '' ) . '</p>
						    <p><b>Nombre: </b>' . ( $campo[ 'nombre' ] != null ? $campo[ 'nombre' ] : '' ) . '</p>
						    <p><b>Apellido:</b> ' . ( $campo[ 'apellido' ] != null ? $campo[ 'apellido' ] : '' ) . '</p>
						    <p><b>Telefono:</b>  ' . ( $campo[ 'email' ] != null ? $campo[ 'email' ] : '' ) . '</p>
						    <p><b>Correo:</b>  ' . ( $campo[ 'phone' ] != null ? $campo[ 'phone' ] : '' ) . '</p>
						    <p><b>Mensaje:</b> ' . ( $campo[ 'mensaje' ] != null ? $campo[ 'mensaje' ] : '' ) . '</p>
						    <br>
						</body>
						</html>';

			$mail->send();
		} catch ( phpmailerException $e ) {
			return $e;
		} catch ( Exception $e ) {
			return $e;
		}
		return redirect()->back()->with('status','¡Mensaje enviado con éxito!');
	}

	public function preventivo( Request $request ) {
		$campo = $request->all();

		//dd($campo);
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

			$mail->From = "contacto@elesud.com";
			$mail->FromName = "Elevadores Sudamericanos Contacto";

			$mail->Subject = "Solicitud de Visita Técnica";
			$mail->WordWrap = 50;

			$mail->AddAddress( "eric@juliochirinos.com" );

			$mail->IsHTML( TRUE );

			$mail->Body = '<!DOCTYPE html>
						<html lang="en">
						<head>
						    <meta charset="UTF-8">
						    <title>Información</title>
						</head>
						<body>
						    <span>Información</span>
						     <p><b>Categoría:</b> ' . ( $campo[ 'address' ] != null ? $campo[ 'address' ] : '' ) . '</p>
						    <p><b>Producto:</b> ' . ( $campo[ 'ref' ] != null ? $campo[ 'ref' ] : '' ) . '</p>
						    <p><b>Nombre: </b>' . ( $campo[ 'nombre' ] != null ? $campo[ 'nombre' ] : '' ) . '</p>
						    <p><b>Apellido:</b> ' . ( $campo[ 'apellido' ] != null ? $campo[ 'apellido' ] : '' ) . '</p>
						    <p><b>Telefono:</b>  ' . ( $campo[ 'email' ] != null ? $campo[ 'email' ] : '' ) . '</p>
						    <p><b>Correo:</b>  ' . ( $campo[ 'phone' ] != null ? $campo[ 'phone' ] : '' ) . '</p>
						    <p><b>Mensaje:</b> ' . ( $campo[ 'mensaje' ] != null ? $campo[ 'mensaje' ] : '' ) . '</p>
						    <br>
						</body>
						</html>';

			$mail->send();
		} catch ( phpmailerException $e ) {
			return $e;
		} catch ( Exception $e ) {
			return $e;
		}
		return redirect()->back()->with('status','¡Mensaje enviado con éxito!');
	}



	public function cotizarInstalacion( Request $request ) {

		//$filePath = $this->upload($request->file('file'));

		$campo = $request->all();
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

			$mail->From = "contacto@elesud.com";
			$mail->FromName = "Elevadores Sudamericanos Contacto";

			$mail->Subject = "Solicitud de Cotización de Instalación";
			$mail->WordWrap = 50;

			$mail->AddAddress( "eric@juliochirinos.com" );

			$mail->IsHTML( TRUE );

			$mail->Body = '<!DOCTYPE html>
						<html lang="en">
						<head>
						    <meta charset="UTF-8">
						    <title>Información</title>
						</head>
						<body>
						    <span>Información</span>
						    <p><b>Nombre: </b>' . ( $campo[ 'nombre' ] != null ? $campo[ 'nombre' ] : '' ) . '</p>
						    <p><b>Apellido:</b> ' . ( $campo[ 'apellido' ] != null ? $campo[ 'apellido' ] : '' ) . '</p>
						    <p><b>Telefono:</b>  ' . ( $campo[ 'email' ] != null ? $campo[ 'email' ] : '' ) . '</p>
						    <p><b>Correo:</b>  ' . ( $campo[ 'phone' ] != null ? $campo[ 'phone' ] : '' ) . '</p>
						    <p><b>Mensaje:</b> ' . ( $campo[ 'mensaje' ] != null ? $campo[ 'mensaje' ] : '' ) . '</p>
						    <br>
						</body>
						</html>';
			if(!is_null($request->file('file'))){
				$mail->AddAttachment($campo['file']->path(),
				                         $request->file('file')->getClientOriginalName());
							
			}
			 

			$mail->send();
		} catch ( phpmailerException $e ) {
			return $e;
		} catch ( Exception $e ) {
			return $e;
		}
		return redirect()->back()->with('status','¡Mensaje enviado con éxito!');
	}
}