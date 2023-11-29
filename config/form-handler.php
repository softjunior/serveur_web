<?php   
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'benitojunior2022@gmail.com';

    $email_subject = 'New Form Submission';

    $email_body = "Nom utilisateur: $name.\n".
                    "Nom utilisateur: $visitor_email.\n".
                    "Sujet : $subject.\n".
                    "message utilisateur: $message.\n";


        $to = 'fokojunior21@gmail.com';

        $headers = "From: $email_from \r\n";

        $headers .= "Reply-TO: $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: ../model/contact.html");
?>