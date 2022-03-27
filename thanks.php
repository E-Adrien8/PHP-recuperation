
<?php

   $message1 = 'Merci '. $_POST['user_prenom']." ". $_POST['user_nom']. ' de nous avoir contacté à propos de '.
    $_POST['user_sujet'];

   $message2 = 'Un de nos conseiller vous contactera soit à 
    l’adresse '. $_POST['user_email']. ' ou par téléphone au '. $_POST['user_telephone'].
    ' dans les plus brefs délais pour traiter votre demande'. ":";

   $message3 = $_POST['user_message'];

    


//securisation email

$_SESSION['errors'] = $errors;


function test_input($var)
{
    $data = trim($var);
    $data = stripslashes($var);
    $data = htmlspecialchars($var);
    return $var;
}

if (empty($_POST["user_email"])) {
    $_SESSION["errors"]["emailErr"] = "un Email SVP";
    header("Location: form.php");
} else {
    $email = test_input($_POST["user_email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["errors"]["emailErr"] = "Format e-mail non compris";
        header("Location: form.php");
    } else {
        echo $message1. $message2. $message3 ;
    };
};







