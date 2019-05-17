<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <script src="js/main.js"></script>
    <title>PokemonCard</title>
</head>
<body>
    <?php include 'php/script.php';?>
    <div class="container">
        <form class="form-select" method="GET">
            <label class="lbl" for="tipos"> Seleccione el tipo de Pokemon</label>
            <select name="pokemonTipo" id="pokemonType" onchange="this.form.submit()">
            <option value="0"> --Seleccione--</option>
        </form>
            
        </select>
        <div class="slide-container">
            <img id="slide_img" src="img/articuno.png" width="200" height="200" alt="pokemon">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div> 
        <div class="stats">
            <ul>
                <li>Nombre: <span id="poke_name"></span></li>
                <li>Fuerza: <span id="poke_fuerza"></span></li>
                <li>Velocidad <span id="poke_velocidad"></span></li>
                <li>Tipo Evolución <span id="poke_tipoEvol"></span></li>
                <li>Tipo <span id="poke_tipo"></span></li>
            </ul>
        </div>

        <!--<div class="min-fuerza">
            <label for="input_fuerza">Escriba el minimo de fuerza</label>
            <input name="input_fuerza" type="text">
            <button type="submit">Mostrar</button> 
        </div> -->
    </div>
</body>
</html>