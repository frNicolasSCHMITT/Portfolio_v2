<?php
    include('connect.php');
    $errors = '';
    $myemail = 'n.schmitt@codeur.online';
    if(
        empty($_POST['name']) ||
        empty($_POST['fname']) ||
        empty($_POST['email']) ||
        empty($_POST['message'])
    ) {
        $errors .= "\n Error: all fields are required";
    }

    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];

    if(empty($errors)) {
        // $to = $myemail;
        // $email_subject = "Nouveau contact du formulaire Portfolio : $name";
        // $email_body = "<p style=\"font-size: 25px\">Vous avez reçu un nouveau message.</p><p style=\"font-size: 20px;\">Voici les détails :</p><br><p><strong><u> Nom</u> :</strong>$name</p><p><strong><u> Prénom</u> :</strong>$fname</p><p><strong><u> E-mail</u> : </strong>$email_address</p><br><p><strong><u>Message</u> : </strong>$message</p>";

        // $header  = 'MIME-Version: 1.0' . "\r\n";
        // $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        // $header .= "From: $myemail\n";
        // $header .= "Reply-To: $email_address";

        // mail($to, $email_subject, $email_body, $header);

        $query = "INSERT INTO `contactform` (name, fname, email, message) VALUES ('$name', '$fname', '$email_address', '$message')";
		$result = mysqli_query($connection, $query);

        header("location: contact_form_thank_you.php");
    }
?>