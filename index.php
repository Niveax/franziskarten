<!DOCTYPE html>
<html>
  <head>
    <title>Kontakt</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <?php


    if(isset($_POST['submit'])) {

      require_once('PHPMailer/PHPMailer/src/PHPMailer.php');
      include_once('PHPMailer/PHPMailer/src/SMTP.php');
      require('PHPMailer/PHPMailer/src/Exception.php');

      $mail = new PHPMailer\PHPMailer\PHPMailer();
      $mail->isSMTP();
      $mail->SMTPDebug = 1;
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
      $mail->Username = 'niveax05@gmail.com';
      $mail->Password = 'manuelneuer2005';
      $mail->AddAddress('niveax05@gmail.com');

      $name = $_POST['name'];
      $subject = $_POST['Betreff'];
      $mailFrom = $_POST['Email'];
      $message = $_POST['Nachricht'];

      $mail->setFrom($mailFrom,$name);

      $mail->Body = "Email: ".$mailFrom. "\nName: ".$name. "\nNachricht: ".$message."";
      $mail->Subject = "Betreff: ".$subject;


      if(!$mail->Send()) {

        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
       header( "refresh:5;url=index.html" );
     }
}

    ?>
    </body>
  </html>
