<?php
   // echo 'je suis dans insertData';
    session_start();  
    
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




$_SESSION['message_succes'] = true;

header('Location:' . $_SERVER['HTTP_REFERER']);

?>