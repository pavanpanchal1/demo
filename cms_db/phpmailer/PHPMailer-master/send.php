<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email = $_POST['email'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/opt/lampp/htdocs/mywork/demo/cms_db/home.php';
require '/opt/lampp/htdocs/mywork/demo/cms_db/phpmailer/PHPMailer-master/src/Exception.php';
require '/opt/lampp/htdocs/mywork/demo/cms_db/phpmailer/PHPMailer-master/src/SMTP.php';
require '/opt/lampp/htdocs/mywork/demo/cms_db/phpmailer/PHPMailer-master/src/PHPMailer.php';


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

    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"] .'<br>Your refrence number : <br>';
    $mail->Body = $_POST["message"] . ' Please visit <a href="localhost/mywork/demo/cms_db/track.php">Click_to_track_your_order</a>';


    $mail->send();


    echo "
    <script>
      alert('sent successfully');
      document.location.href='index.php';
    </script>
    ";


}
?>