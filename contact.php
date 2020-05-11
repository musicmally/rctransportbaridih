<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $comments = $_POST['comments'];
        
    $email_from = 'lsahu0838@gmail.com';
    $email_subject = "Enquiry";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Comment: $comments.\n";


    $to = "sahuvicky852@gmail.com";
    
    $headers = "Form: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email\r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>