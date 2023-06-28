<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email = $_POST['email'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/PHPMailer-master/src/Exception.php';

require '/opt/lampp/htdocs/mywork/sendmail/phpmailer/PHPMailer-master/src/Exception.php';
require '/opt/lampp/htdocs/mywork/sendmail/phpmailer/PHPMailer-master/src/SMTP.php';
require '/opt/lampp/htdocs/mywork/sendmail/phpmailer/PHPMailer-master/src/PHPMailer.php';
// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';


if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'panchalpavan800@gmail.com';
    $mail->Password = 'agsvhuzodbfjwzdd';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('panchalpavan800@gmail.com');
    // $mail -> addAttachment('index.php'); 

    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();


    echo "
    <script>
      alert('sent successfully');
      document.location.href='index.php';
    </script>
    ";


}
?>