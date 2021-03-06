
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stazione ferroviaria</title>
        <link rel="stylesheet" href="ferrovia_finale.css" /> 
        <script src="caricamento_api.js" defer></script>
    </head> 
    <body> 
        <header>
            <nav> 
                <div id="collegamenti">
                    <a class='bottone' href='http://www.grandistazioni.it/content/grandiStazioni/it/le-nostre-stazioni/milano-centrale.html'>Sito originale</a>
                    <a class='bottone' href='https://it.wikipedia.org/wiki/Stazione_di_Milano_Centrale'>Chi siamo?</a>
                    <?php
                        session_start();
                        //Verifica se l'utente è loggato 
                        if(isset($_SESSION['username']))
                        {   echo "<a class='bottone' href='area_personale.php'>Area personale</a>";
                            echo "<a class='bottone' href='logout.php'>Effettua Logout</a>";}
                        else
                        {   echo "<a class='bottone' href='login.php'>Accedi</a>";
                            echo "<a class='bottone' href='registrazione.php'>Registrazione</a>";}
                    ?>
                </div>
            </nav>
            <div id="frase">
                <strong>SCEGLI IL TRENO GIUSTO PER TE!</strong> 
            </div> 
          
        </header>
        <section>
            <div id="benvenuto">
              <h1>Benvenuti nel sito della Stazione di Milano</h1>
              <p>
            Mettetevi comodi e godetevi il <em> Viaggio </em></p><br>
            </div>
      
            <div id="descrizione">
              <div id="vagoni">
                <img src="https://static01.nyt.com/images/2014/06/15/arts/15SNOWPIERCER3/15SNOWPIERCER3-superJumbo.jpg" />
                <h1>VAGONI</h1>
                <p> Guardate i nostri unici vagoni </p>
              </div>
              <div id="tratta">
                <img src="https://static2-viaggi.corriereobjects.it/wp-content/uploads/2020/04/GettyImages-1150977974-1-e1587534832560-1080x669.jpg?v=380307" />
                <h1>TRATTE</h1>
                <p> Scoprite le nostre meravigliose tratte</p>
              </div>
              <div id="treni">
                  <img src="https://image.stern.de/9146992/16x9-1200-675/381c00fe9380beda2e3e2499c46c7240/oG/milano-centrale.jpg" /> 
                  <h1>TRENI</h1>
                 <p> Date un'occhiata ai nostri mezzi</p>
              </div>
            </div>
        </section>

        <!-- Per gli sviluppatori: a fine della pandemia di Covid-19 togliere questa porzione di codice dal sito-->
        <section id="covid"> 
            <p> 
                Al fine di rispettare le disposizioni delle Autorità Sanitarie locali, potrà esserti misurata la temperatura corporea prima della partenza. <br> 
                In presenza di un valore superiore a quello stabilito dalla normativa (per l'Italia superiore ai 37,5° C) potrà esserti vietata la partenza o richiesta una specifica certificazione medica.<br>
                La misurazione della temperatura è prevista anche nella stazione di destinazione finale sul territorio italiano e potrà avvenire anche tramite termoscanner.<br>
                E' dunque necessario non indossare cappelli e copricapo tali da impedire di rilevare la temperatura corporea.
            </p>
            <img src="data:image/png;base64,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">
            <h3> Per maggiori informazioni:<a class="riduzione" href="https://www.governo.it/it/coronavirus">Clicca Qui</a></h3>
            <h1> Dati Covid mondiali: </h1>
                <form id='malati'>
                Inserisci il nome di un Paese (in inglese):
                    <input type='text' id='paese'>
                    <input type='submit' id='submit' value='Cerca'>
                </form>

                <div id="sezione_covid">
                </div>
        </section>
        <!-- Togliere fino a qua -->
    
        <footer>
            <address>Città di Milano (IT), stazione della Wilford Industries con sede legale a Chicago</address>
            <p>Sito di immaginazione, ogni riferimento è puramente casuale</p>
            <p>Vincenzo Micieli O46002226</p>
        </footer>

    </body>
</html>