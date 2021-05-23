<?php
    require 'accessodatabase.php';
    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
    // Inizializza array dei piacimenti
    $piacimenti = array();
    // Leggi cabine
    $query = "SELECT count(*) AS conteggio, carrozza.Nome AS Nome FROM utenti, carrozza 
    WHERE utenti.Votazione=carrozza.Codice_carrozza AND carrozza.Codice_carrozza>0 GROUP BY carrozza.Nome";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res))
        {
             $piacimenti[] = array('conteggio' => $row['conteggio'], 'Nome' => $row['Nome']);
        }
    // Chiudi
    mysqli_free_result($res);
    mysqli_close($conn);
    // Ritorna
    echo json_encode($piacimenti);
?>