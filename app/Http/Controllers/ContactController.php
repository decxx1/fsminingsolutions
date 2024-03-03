<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;



class ContactController extends Controller
{

    public function send(Request $request)
    {
        $score = RecaptchaV3::verify($request->get('g-recaptcha-response'), 'sendMail');
        //Score entre 0 y 0.3, robot. Hasta 0.5 es dudoso. Mayor a 0.5 humano.
        if($score < 0.5) {
            return redirect()->back()->with('error', '¡No se pudo comprobar que eres humano!');
        }
        $emailUserName = env('EMAIL_USERNAME');
        $emailPassword = env('EMAIL_PASSWORD');
        $smtpHost = env('SMTP_HOST');
        $smtpPort = env('SMTP_PORT');
        $smtpEncryption = env('SMTP_ENCRYPTION');

        $mail = new PHPMailer(true);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $file = $request->file('file');

        try {
            //Server settings
            $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $smtpHost;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $emailUserName;                     //SMTP username
            $mail->Password   = $emailPassword;                               //SMTP password
            $mail->SMTPSecure = $smtpEncryption;            //Enable implicit TLS encryption
            $mail->Port       = $smtpPort;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS


            // Establecer el remitente y la dirección de envío real
            $mail->setFrom($emailUserName, 'Fs Mining Solutions');
            $mail->addAddress($emailUserName);

            // Establecer el remitente que se mostrará en el campo "From"
            $mail->clearReplyTos(); // Eliminar las direcciones de respuesta anteriores (si las hubiera)
            $mail->addReplyTo($email, $name);

            $mail->CharSet = 'UTF-8';

            $attachment = 'No se adjuntaron archivos';

            if ($file && $file->getSize() > 0) {
                $attachment = $file->getClientOriginalName();
                // Obtener el tipo MIME del archivo
                $mimeType = $file->getMimeType();


                // Definir los tipos MIME permitidos
                $allowedMimeTypes = [
                    // Imágenes
                    'image/jpeg',
                    'image/png',
                    'image/gif',
                    'image/bmp',
                    'image/webp',
                    'image/svg+xml',
                    // Documentos de texto
                    'text/plain',
                    'application/msword', // .doc
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // .docx
                    'application/vnd.oasis.opendocument.text', // .odt
                    // PDF
                    'application/pdf',
                    // Hojas de cálculo
                    'application/vnd.ms-excel', // .xls
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // .xlsx
                    'application/vnd.oasis.opendocument.spreadsheet', // .ods
                    // Presentaciones
                    'application/vnd.ms-powerpoint', // .ppt
                    'application/vnd.openxmlformats-officedocument.presentationml.presentation', // .pptx
                    'application/vnd.oasis.opendocument.presentation', // .odp
                    // Archivos comprimidos
                    'application/zip',
                    'application/x-rar-compressed',
                    'application/x-tar',
                    'application/x-7z-compressed',
                    'application/x-gzip',
                    // Audio
                    'audio/mpeg',
                    'audio/ogg',
                    'audio/wav',
                    'audio/x-ms-wma',
                    // Video
                    'video/mp4',
                    'video/mpeg',
                    'video/quicktime',
                    'video/x-msvideo',
                    'video/x-flv',
                ];

                // Verificar si el tipo MIME es válido
                if (in_array($mimeType, $allowedMimeTypes)) {
                    //Attachments
                    $mail->addAttachment($file->getRealPath(), $attachment);         //Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                }
                else
                {
                    $attachment = 'El remitente intentó enviar un archivo no soportado:'."\n" .$mimeType ."\n" .'Nombre del archivo: '.$file->getClientOriginalName();
                }
            }

            // Formatear mensaje en HTML con los datos del remitente
            $body = "
                        <h3>Nombre: $name</h3>
                        <h3>E-mail: $email</h3>
                        <br/><br/>
                        <h4>Mensaje:</h4>
                        <p>$message</p>

                        <br/><br/><br/>
                        <h5>Archivos adjuntos</h5>
                        <p>$attachment</p>
                    ";

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Contacto desde FS Mining Solutions de: ' . $name;
            $mail->Body    = $body;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mailSent = $mail->send();

            if ($mailSent) {
                return redirect()->back()->with('success', '¡El mensaje se envió correctamente!');
            } else {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function show()
    {
        return view('contact');
    }
}
