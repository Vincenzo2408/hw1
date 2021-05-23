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
        <link rel="stylesheet" href="area_personale.css" /> 

        <script src="cabine.js" defer></script>
        <script src="caricamento_preferito.js" defer></script>
        <script src="procedure.js" defer></script>
        
        
        
    </head> 
    <body>
        <header>
            <strong> BENVENUTO/A <?php echo $_SESSION["username"]; ?>! </strong>
            <nav>
                <div id="collegamenti">
                <p><a class='bottone' href='ricerca_tratte.php'> Consulta Tratte </a></p> 
                <p><a class='bottone' href='homepage.php'> Torna alla Home </a></p>
                <p><a class='bottone' href='traviata.php'> La sala di attesa</a></p>
                <p><a class='bottone' href='logout.php'>  Effettua Logout </a></p>
                
                </div>
            </nav>
        </header> 
        <section>
    
            <div id="centro">
                <h2> Aiutaci a capire i tuoi gusti per costruire treni migliori. <br> <em>Vota la tua cabina preferita </em> </h2>
                <form method="post" name="nome_form" id="forms">
                     <input type="text" id="codice_carrozza" placeholder="Numero carrozza" name="codice_carrozza" required>
                     <button type="submit" id="submit" name="login"> Vota </button>
                </form>
                <div id="flexiamo">
                    <div id="riga">
                    </div>

                    <div id="tabella">
                    </div>
                </div>

               

                <div id="descrizione"> 
                </div>

              

            </div> 
            <div id="storia">
                    <p> La stazione di Milano Centrale è la principale stazione ferroviaria del capoluogo lombardo, la seconda d'Italia per flusso di passeggeri dopo Roma Termini e prima di Torino Porta 
                    Nuova, nonché una delle principali stazioni ferroviarie d'Europa. </p>
                    <img src="http://mi4345.it/wp-content/uploads/2015/02/10_stazione-di-milano-centrale.jpg" />
                    <p>Fu inaugurata nel 1931 su progetto dell'architetto Ulisse Stacchini in sostituzione della precedente stazione centrale del 1864 che sorgeva nell'attuale 
                    piazza della Repubblica e che era divenuta insufficiente ad assorbire l'aumento del traffico ferroviario.</p>
                    <img src="https://shop.fondazionefs.it/pub/media/catalog/product/cache/ced0e420ef80fb289c61f5c142b50ee5/f/s/fs020new.jpg"/>
                    <p> La gestione degli impianti è affidata a Rete Ferroviaria Italiana (RFI) 
                    società del gruppo Ferrovie dello Stato, che classifica la stazione nella categoria "Platinum", mentre quella delle aree commerciali del monumentale fabbricato viaggiatori è 
                    di competenza di Grandi Stazioni. Nel novembre 2010 lo scalo è stato intitolato a santa Francesca Saverio Cabrini (1850-1917), fondatrice della congregazione delle Missionarie 
                    del Sacro Cuore di Gesù. </p>
                </div>
        </section> 
             
        <section id="procedure">
                <h2>  Noi ascoltiamo i pareri dei nostri utenti. <br> <em> Scegli uno dei treni della nostra stazione e scopri quale carrozza monta! </em> </h2>
                <form method="post" name="nome_form2" id="forms2">
                    <label>Seleziona treno <select name="treno" id="treno"><option value="null"></option> 
                    <?php
                        require 'accessodatabase.php';
                        $conn=mysqli_connect($dbconfig['db_host'],$dbconfig['db_user'],$dbconfig['db_password'],$dbconfig['db_name']) or die(mysqli_error($conn));

                        $query = "SELECT ID,Modello,Agenzia FROM treno";
                        $res = mysqli_query($conn, $query); 
                        while($row = mysqli_fetch_row($res)){
                            echo "<option value= ".$row[0].">".$row[1]."-".$row[2]."</option>";
                        }
                    ?></select>
                    </label>
                    <button type="submit" id="cerca">Cerca </button>
                </form>
                <div id="risposta">
                </div>
            </section>

        <footer>
            <address>Città di Milano (IT), stazione della Wilford Industries con sede legale a Chicago</address>
            <p>Sito di immaginazione, ogni riferimento è puramente casuale</p>
            <p>Vincenzo Micieli O46002226</p>
        </footer>

    </body>   
</html>