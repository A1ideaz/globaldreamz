<?php

require_once "vendor/autoload.php";

$to      = $_POST["email"];
$name    = $_POST["name"];
$msg     = $_POST["message"];
$id      = $_POST["id"];
$mail = new PHPMailer;

$mail->setFrom = "deebaramalingam@gmail.com";
$mail->FromName = "Deeba Ramalingam";

$mail->addAddress($to);

//Provide file path and name of the attachments
//$mail->addAttachment("file.txt", "File.txt");
//$mail->addAttachment("images/profile.png"); //Filename is optional

$mail->isHTML(true);

$mail->Subject = "Receipt From Global Dreamz";
$mail->Body = "hello";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <form>
      <center>
        <a href="test2.html" class="btn btn-primary">Back</a>&nbsp; &nbsp; &nbsp;&nbsp;
         <a href="login.html" class="btn btn-primary">Logout</a>
      </center>
    </form>
  </body>
  </html>
