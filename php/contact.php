<?php


    $error = array( );
    $vousetes = $_GET['vousetes'];
    
    ob_start();



    if (empty($_GET["nom"])) {


       $error['name'] = false; 

      
    }else{

      $error['name'] = true;


    }

    if (filter_var(($_GET["email"]), FILTER_VALIDATE_EMAIL)) {

      $error['email'] = true;

      
    }else{

      $error['email'] = false;


    }


    if (empty($_GET["message"])) {


      $error['message'] = false;


      
    }else{

      $error['message'] = true;


    }

    if ($error['name'] == true && $error['email'] == true && $error['message'] == true){

         require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php'; 


        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = 'smtp.free.fr';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 S                                                      MTP submission
        $mail->Port = 465;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'ssl';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for g                                                      mail
        $mail->Username = "marinebelin@free.fr";
        //Password to use for SMTP authentication
        $mail->Password = "24noi09sette94";
        //Set who the message is to be sent from
        $mail->setFrom($_GET["email"], 'First Last');
        //Set an alternative reply-to address
        $mail->addReplyTo($_GET["email"], 'First Last');
        //Set who the message is to be sent to
        $mail->addAddress('marinebelin.39@gmail.com', 'Marine Belin');
        //Set the subject line
        $mail->Subject = 'mail from'. $_GET["nom"];
        //Read an HTML message body from an external file, convert referenced im                                                      ages to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($_GET["message"] . "\r \n" . "C'est un... " . $_GET['vousetes']);
        //Replace the plain text body with one created manually
        $mail->AltBody = $_GET["message"] . "\r \n" . "C'est un... " . $_GET['vousetes'];
        //Attach an image file
        $mail->addAttachment('../images/logo.png');
        //send the message, check for errors
      /*  if (!$mail->send()) {
            echo json_encode($error);
        } else {
            echo json_encode($error);
        }*/
        $mail->send();
}



    ob_clean();

    echo json_encode($error);
  

?>