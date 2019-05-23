<?php
include 'Pokemon.php';
$pokemones = array();
$pokemones[0] = new Pokemon(0, 'Bulbasaur',49,45,1, array("Grass","Poison"),'bulbasaur.png');
$pokemones[1] = new Pokemon(1, 'Charizard',84,100,3, array("Fire","Flying"),'charizard.png');
$pokemones[2] = new Pokemon(2, 'Squirtle',48,43,1, array("Water"),'squirtle.png');
$pokemones[3] = new Pokemon(3, 'Pikachu',55,90,1, array("Electric"),'pikachu.png');
$pokemones[4] = new Pokemon(4, 'Flareon',130,65,4, array("Fire"),'flareon.png');
$pokemones[5] = new Pokemon(5, 'Mewtwo',110,130,"Sin linea evolutiva", array("Psychic"),'mewtwo.png');
$pokemones[6] = new Pokemon(6, 'Magikarp',1,80,1, array("Water"),'magikarp.png');
$pokemones[7] = new Pokemon(7, 'Dragonite',134,80,3, array("Dragon","Flying"),'dragonite.png');
$pokemones[8] = new Pokemon(8, 'Nidoqueen',92,76,3, array("Poison","Ground"),'nidoqueen.png');
$pokemones[9] = new Pokemon(9, 'Articuno',85,85,"Sin linea evolutiva", array("Ice","Flying"),'articuno.png');


$tipos = [
    0 => "Normal",1 => "Fire",2 => "Water",3 => "Grass",4 => "Electric",5 => "Ice",6 => "Fighting",
    7 => "Poison",8 => "Ground",9 => "Flying",10 => "Psychic",11 => "Bug",12 => "Rock",13 => "Ghost",
    14 => "Dark",15 => "Dragon",16 => "Steel",17 => "Fairy" 
];


if(isset($_GET["pokemonTipo"])){
    $pokemonType = $_GET['pokemonTipo'];
    $typeName = $tipos[$pokemonType];
    // Creamos un array donde guardaremos los pokemones de un tipo en particular
    $pokemon_array = array();
    // Por cada pokemon, validamos si es del tipo que necesitamos
    for ($i=0; $i < count($pokemones); $i++) {
        $poke = $pokemones[$i];
        $pokeArray = $poke->getTipo();
        for ($j=0; $j < count($pokeArray); $j++) { 
            // Si el tipo del pokemon es igual al tipo que necesitamos
            if($pokeArray[$j] == $typeName){
                // Agregamos el nuevo pokemon al array de pokemones
                array_push($pokemon_array, $poke);
            }
        }
    }
    if(count($pokemon_array) == 0){
        echo "No hay pokemones de ese tipo: " . $typeName;
        // Escrbir el JSON
    }else{
        // Escribimos el JSON
        $pokemon_json = json_encode($pokemon_array, JSON_PRETTY_PRINT);
        $fp = fopen('../js/pokemones.json','w');
        fwrite($fp,$pokemon_json);
        fclose($fp);


        /*for ($i=0; $i < count($pokemon_array) ; $i++) { 
            echo $pokemon_array[$i]->getNombre();
            echo "\n";
            echo $pokemon_array[$i]->getFuerza();
            echo "\n";
        }*/


    }
}else{
    echo "Error, el numero de Pokemon no especificado";
}

?>