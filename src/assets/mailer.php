<?php

if($_POST) {

    // The message
    $message = $_POST['message'];
    
    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");
    
    // Send
    mail('t.poly@seznam.cz', "{$_POST['first-name']} {$_POST['last-name']} {$_POST['phone']}", $message);
    
    
    header("Location: /");
    exit();
}
