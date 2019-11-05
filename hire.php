<?php
require_once('config.php');
?>



<?php

    $to = 'adejacob000@gmail.com';
    $name      = $_POST["name"];
    $email     = $_POST["email"];
    $number   = $_POST["number"];
    $message   = $_POST["message"];
    
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Name: '.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>number: '.$number.'</td></tr>
        <tr><td>Text: '.$message.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo " I will contact you shortly !!";

    }else{
        echo "Failed \uD83D\uDE00 !!";
    }
    

?>