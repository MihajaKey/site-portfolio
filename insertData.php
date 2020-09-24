<?php
   // echo 'je suis dans insertData';
    session_start();  
    require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=webservice', 'web_service', 'web_service_site_web');
    }
    catch(Exception $e){
        //die('erruer : ' . );
        echo $e->getMessage();
    }

    $nom = $_POST['name'];
    $mail = $_POST['email'];
    $sujet = $_POST['subject'];
    $messages = $_POST['messages'];
    $id_client="";

    // verifie si l'adresse mail du client est déjà enregistré
    //echo $mail;
    $data_nom = "";
    $res = $bdd->query("SELECT * FROM client WHERE mail='" . $mail . "'");
    while($data = $res->fetch()){
        $data_nom = $data['nom'];
    } 
    if($data_nom != ""){
        //echo 'existe';
        $res1 = $bdd->query("SELECT * FROM client WHERE mail='" . $mail . "'");
        while( $data = $res1->fetch()) $id_client = $data['id'];
        //$res->closeClosure();
    }else{
        //echo "n'existe pas";
        $req = $bdd->prepare('INSERT INTO client( nom, mail ) VALUES ( :nom, :mail ) ');
        $req->execute(array(
            'nom' => $nom,
            'mail' => $mail
        ));
        $res2 = $bdd->query("SELECT * FROM client WHERE mail='" . $mail . "'");
        while( $data = $res2->fetch())  $id_client = $data["id"];
    }
    
    //echo $id_client . " - " . $sujet . " - " . $messages;
    $req1 = $bdd->prepare('INSERT INTO message( id_client, sujet, messages  ) VALUES ( :id_client, :sujet, :messages ) ');
    $req1->execute(array(
        'id_client' => $id_client,
        'sujet' => $sujet,
        'messages' => $messages
    ));



setcookie('nom', $nom, time() + 365*24*3600, null, null, false, true);
setcookie('mail', $mail, time() + 365*24*3600, null, null, false, true);
$_SESSION['message_succes'] = true;

//envoie de notification facebook

/*
$fb = new \Facebook\Facebook([
  'app_id' => '2789239554678614',
  'app_secret' => 'ab916179e1b59ec9f4d2b1d85d8082ca',
  'default_graph_version' => 'v8.0',
  //'default_access_token' => '{access-token}', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {
  // Returns a `FacebookFacebookResponse` object
  $response = $fb->post(
    '/749025609010828/feed',
    array (
      'message' => 'Nouveau Message
      De : '. $nom .'
      Mail : '. $mail.'
      Sujet : '. $sujet.'
      Message : '. $messages
    ),
    "EAAnozHDZAn1YBAIyWCZC3P35DL4yKEXc98RFVYpcetGVeg5dIVuxZCZA3XJ0chLo6eAhdsr09dVk38F1wwwY0Yu0Xg5bI5l6a6xPA4My0oWRZAbQa5lBSLfceAZAPloSmDVGidtl3zcHT7dnIENU1ZBU2tvkRJNTdZCt5SxYYlrpzuNgpTRj0yfctZBD4c2od6qumWTwWpA8kXDIQu19t7YMIgprFymxRGWQf47KA0Q0s5gZDZD"
  );
} catch(FacebookExceptionsFacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookExceptionsFacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
*/
header('Location:' . $_SERVER['HTTP_REFERER']);



?>