<?php

    $to = 'adejacob000@gmail.com';
    $name      = $_POST["name"];
    $email     = $_POST["email"];
    $subject   = $_POST["subject"];
    $message   = $_POST["message"];
    
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Name: '.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Text: '.$message.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo "<script>alert('Thanks For Contacting Me \uD83D\uDE00 U\1f60a !!'); </script>";
        echo "<script>window.open('index.php', '_self');</script>";
    }else{
        echo "<script>alert('Failed \uD83D\uDE00 !!'); </script>";
        echo "<script>window.open('index.php', '_self');</script>";
    }
    

?>





