<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$f_name = isset($_POST['f_name']) ? $_POST['f_name'] : '';
$l_name = isset($_POST['l_name']) ? $_POST['l_name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$query = isset($_POST['message']) ? $_POST['message'] : '';

// $to = 'aic.legalapp@gmail.com';
$to = 'shafeekcodenex@gmail.com';
// Passing `true` enables exceptions

  $message = '<div class="wrapper"><div class="bg-div" style="width: 100%; height: 1000px; background-color: #1ca1ec; padding-top: 45px;"><div class="body" style="width: 800px; margin: auto; background-color: #fff;">';

   $message .='<img src="cid:logoimg" alt="main" style="display: flex; margin: auto; padding: 30px 0;"><div class="congrats" style="text-align: center; background-color: #f9f9f9; padding: 100px 0 10px;">'.
              '<h2 style="font-size: 35px; color: #1ca1ec; margin: 0; padding-bottom: 10px; font-weight: 700;">Congratulations</h2><p style="margin: 0; font-size: 20px; font-weight: 600;">You have new enquiry from your website</p>'.
              '<div class="table" style="background-color: #fff; width: 650px; padding: 80px 60px 20px; text-align: left; margin: auto; margin-top: 110px;"><div class="name" style="border-bottom: 2px solid #cccaca;">'.
              '<h3 style="font-weight: 700; margin: 0; padding: 20px 0 10px;">Name</h3><h4 style="font-weight: 400; color: #565655; margin: 0; padding-bottom: 10px;">'.$f_name.' '.$l_name.'</h4></div>'.
              '<div class="name" style="border-bottom: 2px solid #cccaca;"><h3 style="font-weight: 700; margin: 0; padding: 20px 0 10px;">Email</h3>'.
              '<h4 style="font-weight: 400; color: #565655; margin: 0; padding-bottom: 10px;">'.$email.'</h4></div>'.
              '<div class="name" style="border-bottom: 2px solid #cccaca;"><h3 style="font-weight: 700; margin: 0; padding: 20px 0 10px;">Phone Number</h3>'.
              '<h4 style="font-weight: 400; color: #565655; margin: 0; padding-bottom: 10px;">'.$phone.'</h4></div>'.
              '<div class="name" style="border-bottom: 2px solid #cccaca;"><h3 style="font-weight: 700; margin: 0; padding: 20px 0 10px;">Message</h3>'.
              '<h4 style="font-weight: 400; color: #565655; margin: 0; padding-bottom: 10px;">'.$query.'</h4></div>'.
              '<div class="social-media" style="width: 150px; margin: auto; display: flex;  padding-top: 30px;">'.
              '<a href="#" style="text-decoration: none; margin: auto;"><img style="border: 1px solid #000; width: 40px;" src="cid:fbimg" alt="fb"></a>'.
              '<a href="#" style="text-decoration: none; margin: auto;"><img style="border: 1px solid #000; width: 40px;" src="cid:instaimg" alt="insta"></a>'.
              '<a href="#" style="text-decoration: none; margin: auto;"><img style="border: 1px solid #000; width: 40px;" src="cid:cntimg" alt="cnt"></a></div></div>'.
              '<div class="copyright" style="display: flex;"><h2 style="font-size: 14px; padding-left: 15px; color: #8c8d92; font-weight: 400;">Copyright © '.
              '<a style="text-decoration: none; color: #758bf5;" href="#"> Aknovel</a></h2>'.
              '<h2 style="font-size: 14px; padding-left: 66%; color: #8c8d92; font-weight: 400;">Powered by <a style="text-decoration: none; color: #758bf5;" href="#">Codenex</a></h2>'.
              '</div></div></div></div></div>';

    $from = $email;
    $subject = 'Customer Enquiry';

    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 465; // TLS only
    $mail->SMTPSecure = 'ssl'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = 'shafeekcodenex@gmail.com';
    $mail->Password = 'tffwkcenflwhqpkq';
    $mail->Sender= $email;
    $mail->SetFrom($from, $f_name.$l_name);
    // $mail->SetFrom($from, $cuname, true);
    // $mail->setFrom($cuemail);
    $mail->addAddress($to);
    $mail->Subject = 'Customer Enquiry';
    $mail->AddEmbeddedImage('images/main-logo.png', 'logoimg');
    $mail->AddEmbeddedImage('images/icons/contact-facebook-hvr.png', 'fbimg');
    $mail->AddEmbeddedImage('images/icons/contact-insta-hvr.png', 'instaimg');
    $mail->AddEmbeddedImage('images/icons/contact-X-hvr.png', 'cntimg');
    $mail->msgHTML($message); 
    $mail->AltBody = 'HTML messaging not supported';

   $mail->send();
   session_start();
   $_SESSION['flash'] = 'Email sent successfully..!';
   ?>
   <script>
      window.location.href = 'contact.php';
   </script>
