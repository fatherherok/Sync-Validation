 <?php
     if (isset($_POST['submit'])) {
     $name = 'Olukayode Fadairo';
	$email = 'olukayodefadairo@gmail.com';
	$subject = 'This is a test subject';
	$message = 'This is a test message';
	
	
	
	/* prepare the message for the e-mail */
$to = "samleon657@gmail.com";


//$subject = 'Message from '.$name;


$body = <<<EOD
<br><hr></br>
Subject: $subject <br><br>
Name: $name <br><br>
Email: $email <br><br>
Message: $message <br>
EOD;
		$headers = "FROM: $email\r\n";
		$headers .= "Content-type: text/html\r\n";
		
			mail($to, $subject, $body, $headers);

  }?>
