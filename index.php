<?php
    $to = "shreyasambre@teradoengineering.com";
    $subject = "This is my test subject";
    $message = "This is test message";
    $header = "From: shreyasambre00@gmail.com";



    if(mail($to, $subject, $message, $header)){
        echo "Mail Send";
    }else{
        echo "ERROR";
    }

?>