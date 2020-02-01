<?php

// if($_POST["submit"]) {
    $recipient="timchu92@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    // console.log('Sent!');
    // $thankYou="<p>Thank you! Your message has been sent.</p>";
// }

?>
