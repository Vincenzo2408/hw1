<?php
    //Avvia la sessione
    session_start(); 
    require 'accessodatabase.php';

    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));

    $nome=$_SESSION['username'];

    $query="UPDATE utenti SET Votazione = NULL  WHERE Username = \"$nome\"";

    mysqli_query($conn, $query);
          		
    mysqli_close($conn);

?>