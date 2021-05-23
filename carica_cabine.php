<?php
    require 'accessodatabase.php';
    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
    // Inizializza array delle cabine
    $eventi = array();
    // Leggi cabine
    $query = "SELECT * FROM carrozza WHERE Codice_carrozza>0";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res))
        {
             $eventi[] = array('Codice_carrozza' => $row['Codice_carrozza'], 'Nome' => $row['Nome'], 'Immagine' => $row['Immagine'], 
             'Descrizione' => $row['Descrizione']);
        }
    // Chiudi
    mysqli_free_result($res);
    mysqli_close($conn);
    // Ritorna
    echo json_encode($eventi);
?>