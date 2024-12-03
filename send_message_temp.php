<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ .'/PHPMailer/src/Exception.php';
require __DIR__.'/PHPMailer/src/PHPMailer.php';
require __DIR__.'/PHPMailer/src/SMTP.php';

if(isset($_POST['submit']))
{
    
    $fullname = $_POST['full_name']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject']; 
    $message = $_POST['message'];
    $mail = new PHPMailer(true);
    //Create an instance; passing `true` enables exceptions
    
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        
        $mail->Username   = 'tkaur1988.3@gmail.com';                     //SMTP username
        $mail->Password   = 'sjcb wznp ejob jowf';                  //SMTP password = apppassword created in google mail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('tkaur1988.3@gmail.com', 'Tajinder');
        $mail->addAddress('tkaur1988.3@gmail.com', $fullname);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'new enquery Here is the subject';
        $mail->Body    = '<h3>Hello, you got a new enquery</h3>
                        <h4>Full Name : '.$fullname.'</h4>
                        <h4>Email : '.$email.'</h4>
                        <h4>Phone Number : '.$phone.'</h4>
                        <h4>Subject : '.$subject.'</h4>
                        <h4>Message : '.$message.'</h4>';
        if($mail->send())
        {
            $_SESSION['status'] = "Thank you for sending us a message!<b> We will contact you as soon as possibel."; 
            header("Location: {$_SERVER["HTTP_REFERER"]} ");
            exit(0);
        }
        else
        {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
            header("Location: {$_SERVER["HTTP_REFERER"]} ");
            exit(0);
        }
        
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else{
    header('Location: http://localhost/tajinderphpfiles/project%20TJkitchenware/send_message.php');
    exit(0);
}
?>
