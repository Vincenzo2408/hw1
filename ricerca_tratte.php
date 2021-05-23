<?php 
    //Avvia la sessione
    session_start();
    //Verifica se l'utente è loggato 
    if(!isset($_SESSION['username']))
    {
        //Vai alla login
        header("Location: homepage.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>

<head>
    </head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Area Personale</title>
        <link rel="stylesheet" href="area_tratte.css" /> 

        <script src="caricamento_treni.js" defer></script>
        
        
        
    </head> 
    <body>
        <header>
            <strong> CONSULTA LE NOSTRE TRATTE </strong>
         
            <nav>
                <div id="collegamenti">
              
                <p><a class='bottone' href='area_personale.php'>   Area personale! </a></p>
                <p><a class='bottone' href='homepage.php'> Torna alla Home </a></p>
                <p><a class='bottone' href='traviata.php'> La sala di attesa</a></p>
                <p><a class='bottone' href='logout.php'>  Effettua Logout </a></p>
        
                
                </div>
            </nav>
        </header> 
        <div id="barra">
                    <input type="text" id="fnome" placeholder="Cerca tratta" name="fnome" required>
                </div>
        <section id="centro">
                
                <div id="descrizione">
                   
                </div>
        </section>
        <footer>
            <address>Città di Milano (IT), stazione della Wilford Industries con sede legale a Chicago</address>
            <p>Sito di immaginazione, ogni riferimento è puramente casuale</p>
            <p>Vincenzo Micieli O46002226</p>
        </footer>
    </body>
</html>


