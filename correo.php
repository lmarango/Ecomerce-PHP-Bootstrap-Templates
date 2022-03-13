<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';
	
	$mail = new PHPMailer(true);
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	try {
    //Server settings----
    	$mail->SMTPDebug = 0;                      					//Enable verbose debug output
    	$mail->isSMTP();                                            //Send using SMTP
    	$mail->Host       = 'smtp.gmail.com';                     	//Set the SMTP server to send through
    	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    	$mail->Username   = 'apicontactolsw3@gmail.com';            //SMTP username
    	$mail->Password   = 'ap1-contacto';                         //SMTP password
    	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    	$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   	//Admin
    	$mail->setFrom('apicontactolsw3@gmail.com', 'Contacto: BOOKS');//correo desde el cual se enviaran los mensajes de contacto
    	$mail->addAddress('apicontactolsw3@gmail.com');		//correo al cual le llegaran los mensasjes de contacto(pagina)
   
    	//Content
    	$mail->isHTML(true);                                  		//Set email format to HTML
    	$mail->Subject = $asunto;									//Asunto del contacto
    	$mail->Body    = $mensaje . ' Responder a: ' . $correo;	//Mensaje del contacto
    	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    	$mail->send();
    	//echo 'mensaje enviado';

    //User
    	$mail->ClearAddresses();
    	$mail->setFrom('apicontactolsw3@gmail.com', 'Contacto');//correo desde el cual se enviaran los mensajes de contacto
    	$mail->addAddress($correo);							//correo al cual le llegaran los mensasjes de contacto(usuario)

    	//Content
    	$mail->isHTML(true);                                  		//Set email format to HTML
    	$mail->Subject = 'Respuesta Automática';									//Asunto del contacto
    	$mail->Body    = 'Hola amante de la programación,hemos recibido su mensaje y pronto le daremos respuesta. Gracias';					//Mensaje del contacto
    	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    	$mail->send();
		echo '<script language="javascript">alert("Mensaje Enviado. Pronto te contactaremos");</script>';

		header('Location:VistaContacto.php');
	} catch (Exception $e) {
    	echo "error: {$mail->ErrorInfo}";
	}
?>