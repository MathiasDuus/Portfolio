<?php



if (isset($_POST['email'])&&isset($_POST['besked'])&&isset($_POST['emne']))
{
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $besked = filter_var($_POST['besked'], FILTER_SANITIZE_STRING);
    $emne = filter_var($_POST['emne'], FILTER_SANITIZE_STRING);
    
    $account = "spammenow69420@gmail.com";//the account to "login" to google with
    $password="HQG63cth";
    
    $to = "mathias031001@gmail.com";
    $subject = "$emne";


    $from = "$email";
    
    $inputText = "$besked"."\n Fra: "."$from";
    
    $msg = nl2br(htmlentities($inputText, ENT_QUOTES, 'UTF-8'));

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
    header("Location: ../kontakt.php?send=true");
    exit();
}

}
else{
    header("Location: ../kontakt.php?send=false");
exit();

}
