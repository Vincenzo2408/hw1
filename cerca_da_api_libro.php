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

    $cerca=$_GET["cerca"];
	$stringa=urlencode($cerca);

    //RICERCA LIBRI
    $curl = curl_init();	   
    curl_setopt($curl, CURLOPT_URL, "http://openlibrary.org/search.json?title=".$stringa);
   
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;

?>