<?php



if (isset($_POST['email'])&&isset($_POST['besked'])&&isset($_POST['emne']))
{
    $email = $_POST['email'];
    $besked = $_POST['besked'];
    $emne = $_POST['emne'];
    
    $account = "spammenow69420@gmail.com";//the account to "login" to google with
    $password="HQG63cth";
    
    $to = "mathias031001@gmail.com";
    $subject = "$emne";


    $from = "$email";
    
    $msg = "$besked". "\n Fra ". "$from";

    include("phpmailer/class.phpmailer.php");

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth= true;
    $mail->Port = 465; // 465 Or 587
    $mail->Username= $account;
    $mail->Password= $password;
    $mail->SMTPSecure = 'ssl';
    $mail->From = $from;
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->addAddress($to);
    
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "E-Mail has been sent";
}

}

//
//
//  $to = "mathiass031001@gmail.com";
//         $subject = "$emne";
//         
//         $message = "nl2br$besked";
//         
//         $header = "From:$email";
//         
//         $retval = mail ($to,$subject,$message,$header);
//         
//         if( $retval == true ) {
//            echo "Message sent successfully...";
//         }else {
//            echo "Message could not be sent...";
//         }
//
