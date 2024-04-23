<?php

require_once "vendor/autoload.php";

$to      = $_POST["email"];
$name    = $_POST["name"];
$msg     = $_POST["message"];
$id      = $_POST["id"];
$mail = new PHPMailer;

$mail->From = "deebaramalingam@gmail.com";
$mail->FromName = "Deeba Ramalingam";

$mail->addAddress($to);

//Provide file path and name of the attachments
//$mail->addAttachment("file.txt", "File.txt");
//$mail->addAttachment("images/profile.png"); //Filename is optional

$mail->isHTML(true);

$mail->Subject = "Receipt From Global Dreamz";
$mail->Body = '<html><head></head><body>
    <table class="main-body" style="box-sizing: border-box; min-height: 150px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; width: 100%; height: 100%; background-color: rgb(234, 236, 237);" width="100%" height="100%" bgcolor="rgb(234, 236, 237)">
      <tbody>
        <tr class="row" style="box-sizing: border-box; vertical-align: top;" valign="top">
          <td class="main-body-cell" style="box-sizing: border-box; ">
            <table class="container" style="box-sizing: border-box; font-family: Helvetica, serif; min-height: 150px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; height: 0px; width: 90%; max-width: 550px;" width="90%" height="0">
              <tbody>
                <tr style="box-sizing: border-box;">
                  <td class="container-cell" style="box-sizing: border-box; vertical-align: top; font-size: medium; padding-bottom: 50px;" valign="top">
                    <table class="table100 c1790" style="box-sizing: border-box; width: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; height: 0px; min-height: 30px; border-collapse: separate; margin-top: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;" width="100%" height="0">
                      <tbody>
                        <tr style="box-sizing: border-box;">
                          <td class="top-cell" id="c1793" style="box-sizing: border-box; text-align: right; color: rgb(152, 156, 165);" align="right"></td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="card" style="box-sizing: border-box; background-color: white; min-height: 150px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; margin-bottom: 20px; height: 0px;" height="0">
                      <tbody>
                        <tr style="box-sizing: border-box;">
                          <td class="card-cell" style="box-sizing: border-box; background-color: rgb(255, 255, 255); overflow-x: hidden; overflow-y: hidden; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; text-align: left;" bgcolor="rgb(255, 255, 255)" align="left">
                            <br>
                            <img class="c926" src="header.png" alt="GrapesJS." style="box-sizing: border-box; color: rgb(158, 83, 129); width: 100%; font-size: 50px;">
                            <p class="text-left">Dear
                              <b>'.$id.' ' .$name. '</b>
                            </p>
                            <p>We hereby acknowledge the receipt of Rs
                              <b>'.$msg. '</b>. Your account has been credited for the above amount.</p>
                            <br>
                            <br>
                            <br>
                            <p>Thanks &amp; Regards,
                              <br>Global Dreamz</p>
                            <p></p>
                            <img src="left.png" class="c1271" alt="Big image here" style="box-sizing: border-box; width: 40%; margin-top: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 450px; font-size: 50px; color: rgb(120, 197, 214); line-height: 250px; text-align: center;">
                            <img src="Untitled-3.jpg" class="img-responsive">
                          </td>
                        </tr>
                        <tr></tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table></html>';
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
