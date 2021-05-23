<?php
require 'accessodatabase.php';
    if(isset($_GET["email"]))
    {
        $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
          
            $email = mysqli_real_escape_string($conn, $_GET["email"]);
            $query="SELECT Email FROM utenti WHERE Email = \"$email\"";
            $res=mysqli_query($conn, $query);
            if(mysqli_num_rows($res)>0)
            {
                echo 1; //se c'è
            }   else{
                echo 0; //se non c'è
            }
        
        
    mysqli_close($conn);}
?>