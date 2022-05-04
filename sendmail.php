


<?php

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      use PHPMailer\PHPMailer\SMTP;



      require_once "phpmailer/src/PHPMailer.php";
      require_once "phpmailer/src/SMTP.php";
      require_once "phpmailer/src/Exception.php";

      $mail = new PHPMailer(true);
      $mail->CharSet = 'UTF-8';
      $mail->isSMTP();
      $mail->Host = "smtp.mail.ru";
      $mail->SMTPAuth = true;
      $mail->Username = "gogo-kovalev-2020@mail.ru";
      $mail->Password = 'ghjcnj15';
      $mail->Port = 465;
      $mail->SMTPSecure = "ssl";
      
      $content = $_POST["user_phone"];
      //email settings
      $mail->isHTML(true);
      $mail->setFrom('gogo-kovalev-2020@mail.ru', 'perfect-okna');
      $mail->addAddress("index.html-2020@mail.ru");
      $mail->Subject = 'Заявка на замер';
      $mail->Body = '<p>Пользователь с номером:' . $content . ' заказал выезд специалиста на замер</p>';

      if($mail->send()){
         $status = "success";
         $response = "Email is sent!";

      }
      else
      {
         $status = "failed";
         $response = "Something is wrong: <br>" . $mail->ErrorInfo;
      }

      
   



   // $to = "yasha.comberg@gmail.com";
   // $subject = 'wp_mail functeion test';
   // $message = 'This is a test of the wp_mail function: wp_mail is working';

   // $sent_message = wp_mail( $to, $subject, $message );

   // if ( $sent_message ) {
   //    print_r($_POST['user_phone']);
   //    echo "ff";
   // } else {
   //    echo 'error';
   // }
?>
