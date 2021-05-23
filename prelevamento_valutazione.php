<?php
     session_start();
    require 'accessodatabase.php';
    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));

    $nome = $_SESSION["username"];
 
    // Inizializza array delle cabine
    $eventi = array();
    // Leggi Utente
    $query="SELECT * FROM carrozza WHERE codice_carrozza = (SELECT Votazione From utenti WHERE username = \"$nome\")";
    $res=mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res))
        {
             $eventi[] = array('Codice' => $row['Codice_carrozza'], 'Nome' => $row['Nome'], 'Immagine' => $row['Immagine']);
        }
    // Chiudi
    mysqli_free_result($res);
    mysqli_close($conn);
    // Ritorna
    echo json_encode($eventi);
?>