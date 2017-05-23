<?php


    $error = array( );
    $vousetes = $_GET['vousetes'];



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

           $to      = 'marinebelin.39@gmail.com';
           $subject = 'mail from'. $_GET["nom"];
           $message =  $_GET["message"] . "\r \n" . 'from'. $_GET["email"];
           $headers = 'From: webmaster@example.com' . "\r\n" .
           'Reply-To: webmaster@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

/*           mail($to, $subject, $message, $headers);*/       // Cette fonction ne marche que si le serveur est configuré pour
      

    } 


    echo json_encode($error);
  

?>