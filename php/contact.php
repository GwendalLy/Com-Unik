<?php


    $error = array( );

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

    if ($error['name'] = true && $error['email'] = true && $error['message'] = true){
      
    } 


    echo json_encode($error);
  

?>