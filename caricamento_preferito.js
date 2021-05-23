// Carica inizialmente la lista di eventi
aggiornaEventi();
// Associa event listener al form
document.querySelector("#forms").addEventListener("submit", aggiungiEvento);

function aggiungiEvento(event)
{
    // Leggi form
    const form = document.querySelector("#forms");
    // Invia richiesta con POST
    const form_data = {method: 'post', body: new FormData(form)};
    fetch("caricamento_preferito.php", form_data).then(responseAggiungi);
    // Impedisci submit
    event.preventDefault();
}

function responseAggiungi(response)
{
    aggiornaEventi();
}

function aggiornaEventi()
{

    rest_url="http://127.0.0.1/homework/prelevamento_valutazione.php";
    fetch(rest_url).then(OnResponse).then(onJSON2, onError);

}

function onJSON2(json){
    console.log(json);
    const esterno=document.querySelector('#riga');
    esterno.innerHTML = '';
    const container=document.createElement("div"); 
    esterno.appendChild(container);
    container.setAttribute("id","votazione");
    esterno.classList.add("hidden");

        
    for(let i in json)
    {
      esterno.classList.remove('hidden');
      const new_h1=document.createElement("h1"); 
      new_h1.textContent=json[i].Nome; 
      const new_img=document.createElement("img");
      new_img.src=json[i].Immagine;
      
    
      container.appendChild(new_h1); 
      container.appendChild(new_img);
      if(json[i].Codice!="-1"){
        const elimina=document.createElement("botton");
        elimina.textContent="Rimozione Voto";
        elimina.addEventListener("click", eliminazione);
        container.appendChild(elimina);
      }
      
    }

    rest_url="http://127.0.0.1/homework/conta_piacimenti.php";
    fetch(rest_url).then(OnResponse).then(onJSON, onError);

}

function OnResponse(response)
{
    return response.json();
}

function onError(error){
    console.log('Error:'+ error);
}

function onJSON(json)
{
    console.log(json);
    const maxi=document.querySelector('#tabella');
    maxi.innerHTML='';
    const container2=document.createElement("div"); 
    maxi.appendChild(container2);
    const new_p=document.createElement("h1"); 
    new_p.textContent="Gli altri utenti hanno così votato:"; 

    container2.appendChild(new_p); 
    
    
    for(let i in json)
    {
      const container=document.createElement("div"); 
      maxi.appendChild(container);
      const new_p=document.createElement("p"); 
      new_p.textContent="La "+json[i].Nome+" ha ricevuto un totale di: "; 
      const new_p_1=document.createElement("p");
      new_p_1.textContent=json[i].conteggio+ " voti";
    
      container.appendChild(new_p); 
      container.appendChild(new_p_1);
      
    }

    const img=document.createElement("img");
    img.src="https://www.vittoriaalata.it/wp-content/uploads/2017/12/coppa.png";
    container2.appendChild(img);
}

function eliminazione(event){

    fetch("http://127.0.0.1/homework/elimina.php").then(aggiornaEventi);
}





