function loadTypes(){

    var typesArray = ['Normal','Fire','Water','Grass','Electric','Ice','Fighting','Poison',
    'Ground','Flying','Psychic','Bug','Rock','Ghost','Dark','Dragon','Steel','Fairy'];

    var select = document.getElementById("pokemonType");
    var counter = 0;
    for (let i = 0; i < typesArray.length; i++) {
        var element = typesArray[i];
        var item = document.createElement("option");
        item.text = element;
        item.value = counter;
        counter++;
        select.appendChild(item);
    }    
}

 /* Obtiene todos los pokemon del tipo enviado "tipo" y
    guarda la informacion de los pokemon en un JSON.
    Posteriormente, llama la funcion "cargarSlide"*/
function getTipo(){
    var tipo = document.getElementById("pokemonType").value;
    $(".datos").load("php/getPokemon.php?pokemonTipo=" + tipo);
    cargarSlide();


}
/* Cargamos el archivo JSON y lo guardamos en una variable
   local. "pData" para luego trabajar con los datos */
function cargarSlide(){
    jQuery.getJSON("js/pokemones.json", function(pData){
        console.log(pData);
        for (let i = 0; i < pData.length; i++) {
            poke = pData[i];
            console.log(poke);
        }
    });
    
    
}

window.onload = loadTypes;