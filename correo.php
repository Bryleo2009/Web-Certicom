<?php 
if(isset($_POST['enviar'])){
   if(!empty($_POST['nombre']) &&  !empty($_POST['mensaje']) && !empty($_POST['mail']) ){	
        $name = $_POST['nombre'];
   	$asunto = "prueba";
   	$msg = $_POST['mensaje'];
    $email = $_POST['mail'];

$header = "From: lv597446@gmail.com" . "\r\n";
$header = "Reply-To: noreply@example.com" . "\r\n";
$header = "X-Mailer: PHP/" . phpversion();
$mail = @mail($email,$asunto,$msg,$header);
if ($mail){
	echo "<h1> ¡Mail enviado exitosamente!</h1>";
}
else{
     echo "<h1> ¡fallo en el envio!</h1>";
}
   }
 }