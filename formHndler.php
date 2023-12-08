<?php
      $name = $_POST['name'];
      $visitor_email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $email_from = 'info@yourwebsite.com',
      $email_subject = 'New Form Submission';
      $email_body = "User Name: $name.\n".
                    "User Email:$visitor_email.\n ".
                    "Subject:$subject.\n".
                    " user Message: $message.\n".

      $to =  'irfanpaniyara006@gmail.com';
      $email_body= "Form:$email_from \r\n" ;
      $headers = "Reply_TO:$visitor_email \r\n ";
      mail($to, $email_subject , $email_body  $headers);
      header = "(Locatoin:conatct.html)";

?>