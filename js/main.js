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

function getTipo(){
    
    var tipo = document.getElementById("pokemonType").value;
    $(".datos").load("php/getPokemon.php?pokemonTipo=" + tipo);
    
}

window.onload = loadTypes;