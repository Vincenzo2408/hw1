<?php


    $cerca=$_GET["cerca"];
	$stringa=urlencode($cerca);

    //RICERCA COVID
    $curl = curl_init();	   
    curl_setopt($curl, CURLOPT_URL, 'https://covid-api.mmediagroup.fr/v1/cases?country='.$stringa);
   
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;

?>