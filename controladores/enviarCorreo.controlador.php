<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class ControladorCorreo{

    /*=============================================
	Enviar Pedido Personalizado
	=============================================*/

	static public function ctrEnviarPedidoPersonalizado(){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'angel.alvarez.guzman0@gmail.com';                     //SMTP username
            $mail->Password   = 'Angel123*';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('angel.alvarez.guzman0@gmail.com', 'Angel');
            $mail->addAddress('angel.alvarez.guzman0@gmail.com', 'Perengano');     //Add a recipient

            /*
            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            */
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Pedido Personalizado';
            $mail->Body    = 'Correo de Prueba';

        
            $mail->send();
            echo 'Correo Enviado Correctamente';
        } catch (Exception $e) {
            echo "Error Al enviar el correo: {$mail->ErrorInfo}";
        }
	}

}