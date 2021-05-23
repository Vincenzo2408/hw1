<?php
 require 'accessodatabase.php';
 session_start();
 $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
 $nome = $_SESSION["username"];

 
     
     $codice = mysqli_real_escape_string($conn, $_POST["codice_carrozza"]);

     $query="SELECT * FROM carrozza where Codice_carrozza>0";
     $res = mysqli_query($conn, $query);
     
     //Controllo del numero inserito
     if(($codice <= mysqli_num_rows($res)) && ($codice > 0)){
         $query="UPDATE utenti SET Votazione = \"$codice\" WHERE Username = \"$nome\" ";
         mysqli_query($conn, $query);
     }
     else
     {
        $codice = -1;
        $query="UPDATE utenti SET Votazione = \"$codice\" WHERE Username = \"$nome\" ";
         mysqli_query($conn, $query);
     }
 
 mysqli_close($conn);
?>
    
