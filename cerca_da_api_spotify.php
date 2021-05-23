<?php 
    //Avvia la sessione

    session_start();
    //Verifica se l'utente è loggato 
    if(!isset($_SESSION['username']))
    {
        //Vai alla login
        header("Location: homepage.php");
        exit;
    }

    $client_id = '3682fe4c8799452baa29f5a5e0fdc871'; 
    $client_secret = 'db3c2592c52343fc91e930863c65ba9b'; 

    // ACCESS TOKEN
    $cu = curl_init();
    curl_setopt($cu, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, 1);
    # Eseguo la POST
    curl_setopt($cu, CURLOPT_POST, 1);
    # Setto body e header della POST
    curl_setopt($cu, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
    curl_setopt($cu, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); //Vedere se funziona con btoa
    $token=json_decode(curl_exec($cu), true);
    curl_close($cu);    

    // AUTORIZZAZIONE TOKEN
    $cerca = urlencode($_GET["cerca"]);
    $url = 'https://api.spotify.com/v1/search?type=album&q='.$cerca;
    $cu = curl_init();
    curl_setopt($cu, CURLOPT_URL, $url);
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, 1);
    # Imposto il token
    curl_setopt($cu, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
    $res=curl_exec($cu);
    curl_close($cu);

    echo $res;
?>