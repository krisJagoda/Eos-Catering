<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['phone'];
  $loc = $_POST['location'];
  $message = $_POST['message'];
  if (empty($name) || empty($email) || empty($tel) || empty($loc) || empty($message)) {
    echo 'Wypełnij poprawnie formularz!';
    exit;
  }

  $to = 'kriswro@gmail.com';
  $subject = "Nowa wiadomość z formularza na stronie! \n";
  $body = "Otrzymałeś nową wiadomość od $name.\n".
  		"Adres e-mail: $email \n".
      "Nr tel: $tel \n".
      "Lokalizacja: $loc \n".
  		"Treść wiadomości:\n $message.";
  $headers = 'Content-type: text/plain; charset=utf-8' . "\r\n";
  $headers .= "From: $email \r\n";

  if (mail($to,$subject,$body,$headers)){
    header('Location: ../mail_sent.php');
  } else {
    header('Location: ../mail_not_sent.php');
  }

  /* function from http://phpsense.com/php/php-mail.html */
  function IsInjected($str)
  {
    $injections = array('(\n+)',
                '(\r+)',
                '(\t+)',
                '(%0A+)',
                '(%0D+)',
                '(%08+)',
                '(%09+)'
                );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if(preg_match($inject,$str))
      {
      return true;
    }
    else
      {
      return false;
    }
  }

  if(IsInjected($email))
  {
      echo "Bad email value!";
      exit;
  }

}

 ?>
