<?php


  if (isset($_GET['nom']) && isset($_GET['email']) && isset($_GET['message'])){

        echo '<p>'.'Merci '.$_GET['nom'].' !'.'</p>';

  } 


  if (empty($_GET["nom"])) {

      echo "Name is required <br>";
    
  }

  if (empty($_GET["email"])) {

      echo "Email is required <br>";
    
  }


  if (empty($_GET["message"])) {

      echo "Message is required <br>";
    
  }

  
?>