
<?php

   $message1 = 'Merci '. $_POST['user_prenom']." ". $_POST['user_nom']. ' de nous avoir contacté à propos de '.
    $_POST['user_sujet'];

   $message2 = 'Un de nos conseiller vous contactera soit à 
    l’adresse '. $_POST['user_email']. ' ou par téléphone au '. $_POST['user_telephone'].
    ' dans les plus brefs délais pour traiter votre demande'. ":";

   $message3 = $_POST['user_message'];

    echo $message1. $message2. $message3 ;






