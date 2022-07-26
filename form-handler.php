-<?php
$name = $_POST['name'];
$visitor_email; = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'subhash41828@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: "$name.\n".
              "User Email": $visitor_email.\n".
              "Subject: $visitor_email.\n".
            "User Messange: $message .\n";

            $t0 ='subhash41828@gmail.com';
            $headers = "From: $email_form \r\n"
            .headers.="Replay-To: $visitor_email \r\n;
            mail($to, &subject, $small_body, $headers;
            header("Location: contact.html);
?>