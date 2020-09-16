<?php
session_start();
$_SESSION["mail_valide"] = "error";


require_once 'vendor/autoload.php';

$email = $_GET['email'];

$client   = new QuickEmailVerification\Client('bf8d2518adb0bd3f67c3d9a651a5d9e320bb0f99096a0db8c2836889525f');
$quickemailverification  = $client->quickemailverification();

try {
// PRODUCTION MODE
  $response = $quickemailverification->verify($email);
  $result = $response->body["result"];
  //echo $email;
  //echo "<br>";
  if($result === "invalid"){
      echo "Adresse invalide";
      //echo "<br>";
      //echo $response->body["reason"];
  }elseif( $result === "valid"){
      echo "Adresse valide ";
      //echo "<br>";
      if($response->body["safe_to_send"]){
          $_SESSION["mail_valide"] = "success";
          echo "mail safe to send";
      }else{
          echo "mail not safe to send";
      }
  }else{
      echo "Adresse inconnue";
  }

// SANDBOX MODE
// $response = $quickemailverification->sandbox("valid@example.com");
}
catch (Exception $e) {
  echo "Code: " . $e->getCode() . " Message: " . $e->getMessage();
}
?>