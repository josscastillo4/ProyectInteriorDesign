<?php 
include "conexion.php";

if(isset($_POST['email'])) 
{
$email_to = "josscb4@gmail.com"; // aqui va el correo electronico al que quieres que le llegue los datos
$email_subject = "Contacto desde el sitio web";  


// Aquí se deberían validar los datos ingresados por el usuario 

if(!isset($_POST['nombre']) || 
!isset($_POST['email']) || 
!isset($_POST['telefono']) || 
!isset($_POST['comentarios'])) {  

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />"; 
echo "Por favor, vuelva atrás y verifique la información ingresada<br />"; 
die(); }  
$email_message = "Detalles del formulario de contacto:\n\n"; 
$email_message .= "Nombre: " . $_POST['nombre'] . "\n"; 
$email_message .= "E-mail: " . $_POST['email'] . "\n"; 
$email_message .= "Telefono: " . $_POST['telefono'] . "\n"; 
$email_message .= "Mensaje: " . $_POST['comentarios'] . "\n\n";  // Ahora se envía el e-mail usando la función mail() de PHP 

$headers = 'From: '.$_POST['email']."\r\n". 
'Reply-To: '.$_POST['email']."\r\n" . 
'X-Mailer: PHP/' . phpversion(); 
@mail($email_to, $email_subject, $email_message, $headers);  
echo "¡El correo se ha enviado con éxito!";
echo'<META HTTP-EQUIV=Refresh CONTENT="2; URL=index.php">'; } 
?>