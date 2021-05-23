<?php
    require 'accessodatabase.php';
    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
    // Inizializza array della richiesta
    $richiesta = array();
    // Leggi richiesta
    $query = "SELECT * FROM (tratta tr join offerta of on tr.CodiceT=of.CodiceT) join treno t on of.IdTreno=t.ID order by tr.orario;";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res))
        {
             $richiesta[] = array('Immagine' => $row['Immagine'], 'Citta' => $row['CittàArrivo'], 
             'Orario' => $row['Orario'],
             'Agenzia' => $row['Agenzia']);
        }
    // Chiudi
    mysqli_free_result($res);
    mysqli_close($conn);
    // Ritorna
    echo json_encode($richiesta);
?>