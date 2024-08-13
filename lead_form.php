<?php

if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $mailTo = "asaini@ftechiz.com";
    $headers = "From: ".$email;
    $email_subject = "Mail from Sidavi contact form";
    $email_body = "Name:  $name $lname. \n".    
                        "Subject: $subject.\n".
                    "Email: $email.\n".
                            "Message: $message.\n";

    mail($mailTo, $email_subject, $email_body, $headers);
    header("Location: thank-you.php?mailsend");  

}

?>

