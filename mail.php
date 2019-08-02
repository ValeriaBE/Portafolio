<?php
if(isset($_POST['send_message_btn'])){
    $to = 'valeberroc@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message = "<html>
    <head>
        <title>New message from website contact form</title>
    </head>
    <body>
        <p>".$email."</p>
        <h1>" . $subject . "</h1>
        <p>".$msg."</p>
    </body>
    </html>";
    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }
}
?>
