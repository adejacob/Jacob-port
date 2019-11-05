<?php
require_once('config.php');
?>



<?php

    $to = 'adejacob000@gmail.com';
    $name1      = $_POST["name1"];
    $email1     = $_POST["email1"];
    $number1   = $_POST["number1"];
    $message1   = $_POST["message1"];
    
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email1 . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message1 ='<table style="width:100%">
        <tr>
            <td>Name: '.$name1.'</td>
        </tr>
        <tr><td>Email: '.$email1.'</td></tr>
        <tr><td>number: '.$number1.'</td></tr>
        <tr><td>Text: '.$message1.'</td></tr>
        
    </table>';

    if (@mail($to, $email1, $message1, $headers))
    {
        echo " I will contact you shortly !!";

    }else{
        echo "Failed \uD83D\uDE00 !!";
    }
    

?>