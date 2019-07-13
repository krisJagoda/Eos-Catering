<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LcLA6kUAAAAAGQYyWGtP1rmoOvKg9We7cjDQP6t',
            'response' => $user_response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );
        foreach($fields as $key=>$value) {
          $fields_string .= $key . '=' . $value . '&';
        }
          $fields_string = rtrim($fields_string, '&');

echo "fs:".$fields_string."\n";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);
echo "here".$result;
        return json_decode($result, true);
    }

    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {

       header('Location: ../mail_not_sent.php');

      exit;
    } 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['phone'];
    $loc = $_POST['location'];
    $message = $_POST['message'];
    if (empty($name) || empty($email) || empty($tel) || empty($loc) || empty($message)) {
        echo 'Wypełnij poprawnie formularz!';
        exit;
    }

    $to = 'biuro@eoscatering.pl';
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
