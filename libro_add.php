<?php

require 'accessodatabase.php';
session_start();

    if(!isset($_SESSION['username']))
    {
    
        header("Location: homepage.php");
        exit;
    }
	
	
            $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
            $titolo = mysqli_real_escape_string($conn, $_GET["titolo"]);
			$nome=$_SESSION['username'];

            $query="UPDATE utenti SET Libro= \"$titolo\" WHERE Username = \"$nome\" ";
            mysqli_query($conn, $query);
          		
			mysqli_close($conn);		
?>