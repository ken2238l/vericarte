<?php
    $msg_ok='Votre ticket est bien valide';
    $mail_corps="code";
    $NOM="NOM";
    $email="email";
    $destinataire='franciscokennett048gmail.com';
   $objet='verification de site';
   $mail_corps = "code";
    if (mail($destinataire,$objet,$mail_corps)) {
        //Le mail est bien expédié
        echo $msg_ok;
      } 
    else {
        //Le mail n'a pas été expédié
        echo 'Une erreur est survenue';
      }
?>
