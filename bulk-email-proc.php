<?php 

// include('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $emails = $_POST['emails'];
    $message = $_POST['message'];

    
    $emails = explode(',', $emails);
    foreach ($emails as $email) {
        $email = trim($email);
        echo $email . "<br/>";
    }

    var_dump($emails);

    // $mail = new PHPMailer(true);              // Passing `true` enables exceptions
    // try {
    //     //Server settings
    //     $mail->SMTPDebug = 2;                 // Enable verbose debug output
    //     $mail->isSMTP();                      // Set mailer to use SMTP
    //     $mail->Host = '';                     // Specify main and backup SMTP servers
    //     $mail->SMTPAuth = true;               // Enable SMTP authentication
    //     $mail->Username = '';                 // SMTP username
    //     $mail->Password = '';                 // SMTP password
    //     $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
    //     $mail->Port = 587;                    // TCP port to connect to

    //     //Recipients
    //     $mail->setFrom(/* Your Email */'', /* Your Name */'');

    //     // Add each email into the $mail object
        
    //     // Add code here

    //     //Content
    //     $mail->isHTML(true);                                  // Set email format to HTML
    //     $mail->Subject = 'Here is the subject';
    //     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //     $mail->send();
    //     echo 'Message has been sent';
    // } catch (Exception $e) {
    //     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    // }
} else {
    ?>
    Nothing here
    <?php
}