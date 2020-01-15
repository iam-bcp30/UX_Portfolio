<?php

if (isset($_POST["send"])) {
    $name = $_POST["name"]; 
    $mailFrom = $_POST["email"]; 
    $message = $_POST["message"]; 

    $mailTo = "bcpennington.618@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt= "You have received an email from ".$name. ".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailSend");
    
}

?>