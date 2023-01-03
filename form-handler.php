<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_post['subject'];
$message = $_post['messgae'];
$email_form='eduford@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
             "User Name: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Name: message.\n";

             $to ="kthapaliya77@gmail.com";
             $headers="Form: $email_form\r\n";
             $headers .="Reply-To: $visitors_email\r\n";
             mail($to,$email_subject,$email_body,$headers)
             header("Location: contact.html");


?>
