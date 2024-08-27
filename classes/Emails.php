<?php
namespace Classes;

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class Emails {
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        // Crear el transporte para Gmail
        // Asegúrate de codificar la contraseña y otros valores si es necesario
        $emailUser = $_ENV['EMAIL_USER'];
        $emailPass = $_ENV['EMAIL_PASS']; // Codificación de la contraseña
        $emailSmtp = $_ENV['EMAIL_SMTP'];
        $emailPort = $_ENV['EMAIL_PORT'];

        // Construcción del DSN
        $dsn = sprintf('smtp://%s:%s@%s:%s', $emailUser, $emailPass, $emailSmtp, $emailPort);

        // Crear el transporte de correo
        $transport = Transport::fromDsn($dsn);

        // Crear el Mailer usando el transporte
        $mailer = new Mailer($transport);

        //Definir contenido del mensaje
        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has Registrado Correctamente tu cuenta en DevWebCamp; pero es necesario confirmarla</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['HOST'] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";       
        $contenido .= "<p>Si tu no creaste esta cuenta; puedes ignorar el mensaje</p>";
        $contenido .= '</html>';

        // Crear el mensaje
        $email = (new Email())
        ->from($_ENV['EMAIL_USER']) // Cambia esto a tu dirección de correo
        ->to($this->email)
        ->subject('Confirma tu cuenta')
        ->html($contenido);

        // Enviar el mensaje
        $mailer->send($email);
    }

    public function enviarInstrucciones(){
         // Crear el transporte para Gmail
        // Asegúrate de codificar la contraseña y otros valores si es necesario
        $emailUser = $_ENV['EMAIL_USER'];
        $emailPass = $_ENV['EMAIL_PASS']; // Codificación de la contraseña
        $emailSmtp = $_ENV['EMAIL_SMTP'];
        $emailPort = $_ENV['EMAIL_PORT'];

        // Construcción del DSN
        $dsn = sprintf('smtp://%s:%s@%s:%s', $emailUser, $emailPass, $emailSmtp, $emailPort);

        // Crear el transporte de correo
        $transport = Transport::fromDsn($dsn);
        
        // Crear el Mailer usando el transporte
        $mailer = new Mailer($transport);

        //Definir contenido del mensaje
        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['HOST'] . "/recuperar?token=" . $this->token . "'>Reestablecer Password</a>";        
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';

        // Crear el mensaje
        $email = (new Email())
        ->from($_ENV['EMAIL_USER']) // Cambia esto a tu dirección de correo
        ->to($this->email)
        ->subject('Reestablece tu contraseña')
        ->html($contenido);

        // Enviar el mensaje
        $mailer->send($email);
    }
}



