<?php
 require 'accessodatabase.php';
 session_start();
    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
    $nome = $_SESSION["username"];
    $richiesta=array();

    $treno = mysqli_real_escape_string($conn, $_GET["treno"]);
    $query="SELECT c.Nome FROM carrozza c join treno t on c.Codice_carrozza=t.Cabina_montata where t.ID=\"$treno\"";
    $res = mysqli_query($conn, $query);

     while($row = mysqli_fetch_assoc($res))
     {
          $richiesta[] = array('Nome' => $row['Nome']);
     }
    // Chiudi
    mysqli_free_result($res);
    mysqli_close($conn);
    // Ritorna
    echo json_encode($richiesta);
?>