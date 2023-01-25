<?php

/* Contact_Email */
$name = $_POST['name'];
$email = $_POST['e-mail'];
$color = $_POST['color'];
$colores = $_POST['colores'];
$message = $_POST['message'];

$para = 'suriiikim@gmail.com';
$titulo = 'Contact from webpage';
$header = 'From:'.$email;

$msjCorreo = "Nombre: $nombre\nE-mail: $email\nColor: $color\nColores: $colores\nMensaje: $mensaje";

if ($_POST['submit']){if (mail($para, $titulo, $msjCorreo, $header)){
    
    echo "<script language='javascript'>
          alert('Message sent with success. Thank you.');
          window.location.href='http://www.esat.es';
          </script>";
        
    }else{
    echo 'Error';
}
    
}

?>
