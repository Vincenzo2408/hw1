<?php
    //Avvia la sessione
    session_start(); 
    require 'accessodatabase.php';
    //Verifica l'accesso 
    if(isset($_SESSION["username"])) //Se già è stato fatto l'ingresso (cioè vi è una sessione attiva), vai alla pagina utente
    {
        //Vai alla pagina personale utente 
        header("Location: area_personale.php");
        exit;
    }
    //Verifica l'esistenza di dati POST 
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        //Connetti al database 
        $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
   
        //Verifica credenziali
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        
       
        //Creazione della query
        $query="SELECT * FROM utenti WHERE Username= \"$username\"";
        $res = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($res)>0)
        {
            $entry = mysqli_fetch_assoc($res);
            if (password_verify($_POST['password'], $entry['Pass'])) {   

            //Imposta la variabile di sessione
            $_SESSION["username"]=$_POST["username"]; 
            //Vai alla pagina personale utente 
            header("Location: area_personale.php");
            exit;
            }
            else
            {
                $errore=true;
            }
        }
        else
        {
            $errore=true;
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login.css" /> 
    </head>
    <body>
        <section>
            <form method="post" name="nome_form">
                <h1>Login</h1>
                <?php
                    if(isset($errore)){
                        echo "<p class='errore'>";
                        echo "Username e/o Password errati";
                        echo "</p>";
                    }
                ?>
                <input type="text" id="username" placeholder="Username" name="username" required>
                <input type="password" id="password" placeholder="Password" name="password" required>
                <button type="submit" name="login">Accedi</button>
                <a href="registrazione.php">Registrati!</a>
            </form>
        </section> 

        <footer>
            <address>Città di Milano (IT), stazione della Wilford Industries con sede legale a Chicago</address>
            <p>Sito di immaginazione, ogni riferimento è puramente casuale</p>
            <p>Vincenzo Micieli O46002226</p>
        </footer>

    </body>
</html>

