<?php
     session_start();
    require 'accessodatabase.php';
    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));

    $nome = $_SESSION["username"];
 
    // Inizializza array delle cabine
    $eventi = array();
    // Leggi Utente
    $query="SELECT * FROM utenti WHERE Username=\"$nome\" ";
    $res=mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res))
        {
             $eventi[] = array('Musica' => $row['Musica'], 'Libro' => $row['Libro']);
        }
    // Chiudi
    mysqli_free_result($res);
    mysqli_close($conn);
    // Ritorna
    echo json_encode($eventi);
?>