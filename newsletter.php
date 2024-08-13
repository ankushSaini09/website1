<?php

if (isset($_POST['submit'])){
    $email = $_POST['nl_email'];

    $mailTo = "info@offthemap.co.in";
    $headers = "From: ".$email;
    $email_subject = "Mail from Sidavi newsletter";
    $email_body =  "E-mail: $email.\n";

    mail($mailTo, $email_subject, $email_body, $headers);
    header("Location: thank-you.php?mailsend");  

}

?>