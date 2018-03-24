<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "admin@air-pods.online";
    $to = "nyzhnykvova@gmail.com";
    $subject = "Checking PHP mail";
    $number = $_POST["body"];
    $name = $_POST["name"];
    $message = "from the user $name.\n".   "Here is the phone:\n $number".    
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>