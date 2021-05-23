<?php
require 'accessodatabase.php';

if(!empty($_POST["username"]) && !empty($_POST["nome"]) && !empty($_POST['cognome']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));
    //Controlli in lato server!
    // Controllo Username già esistente
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $query="SELECT Username FROM utenti WHERE Username = \"$username\"";
    $res=mysqli_query($conn, $query);
    if(mysqli_num_rows($res)>0){
        $s_control=true;
    }
    //Controllo lunghezza Password
    if((strlen($_POST['password'])<6) || (strlen($_POST['password'])>15)){
        $s_control=true;
    }
    
    //Controllo indirizzo email
    $email= mysqli_real_escape_string($conn, $_POST["email"]);
    $query="SELECT Email FROM Utenti WHERE Email = \"$email\"";
    $res=mysqli_query($conn, $query);
    if(mysqli_num_rows($res)>0){
        $s_control=true;
    }

    //Controllo di conferma password 
    $password= mysqli_real_escape_string($conn, $_POST["password"]);
    $conferma= mysqli_real_escape_string($conn, $_POST["conferma"]);
    if(strcmp($password, $conferma)!=0){
        $s_control=true;
    }
    
   
    //Nessun errore in precedenza:
    if(!isset($s_control)){
        $name=mysqli_real_escape_string($conn, $_POST["nome"]);
        $surname=mysqli_real_escape_string($conn, $_POST["cognome"]); 
        $password=mysqli_real_escape_string($conn, $_POST["password"]);

        $password = password_hash($password, PASSWORD_BCRYPT);

        $query= "INSERT INTO UTENTI(Username, Pass, Nome, Cognome, Email) VALUES (\"$username\",\"$password\",\"$name\",\"$surname\", \"$email\")";
        $res=mysqli_query($conn, $query); 
        if($res){
            mysqli_close($conn);
            header("Location: homepage.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registrazione</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login.css" /> 
        <script src='signup.js' defer></script>
    </head>
    <body>
        <form method="post" action="registrazione.php">
            <h1>Registrazione</h1>
         
            <input type="text" id="username" placeholder="Username" name="username" maxlength="20" required>
            <p id='segnalazione' class='errore hidden'>"Username già in uso"</p>
           

            <input type="text" id="nome" placeholder="Nome" name="nome" maxlength="20" required>
            <input type="text" id="cognome" placeholder="Cognome" name="cognome" maxlength="20" required>
            <input type="text" id="email" placeholder="Email" name="email" maxlength="40" required>
            <p id='segnemail' class='errore hidden'>Email già esistente</p>
            <input type="password" id="password" placeholder="Password" name="password" maxlength="15" required>
            <p id='segnpass' class='errore hidden'>Password non conforme (min:6 caratteri, max:15 caratteri)</p>
          
            <input type="password" id="conferma" placeholder="Conferma Password" name="conferma" maxlenght="15" required>
            <p id="segnconf" class='errore hidden'>Password non coincidente </p>
            
            <button id="bottone" type="submit" name="register">Registrati</button>
            <?php
                 if(isset($s_control)){
                    echo "<p class='errore'>";
                    echo "Registrazione non effettuata! Errori di compilazione";
                    echo "</p>";
                }
            ?>
        </form>
    </body>
</html>