<?php
    set_time_limit (0);
    ?>
    <div id="myProgress">
        <div id="myBar"></div>
    </div>
    <?php
    for ($i=1; $i <810 ; $i++) { 
        $filename = "C:/xampp/htdocs/PokemonBattle/assets/pokemons/".$i.".gif";
        $file = fopen("https://pokemonlegends.com.br/public/images/pokemon/".$i.".gif", 'r');
        file_put_contents($filename, $file);
        fclose($file);
        $porcento = ($i*100)/809;
        if($porcento == 100){
            echo ("<h1 align='center'> Done!</h1>");
        }
        ?>
        <style>
            #myProgress {
                width: 100%;
                background-color: grey;
                }

            #myBar {
                width: <?= $porcento.'%;'?>
                height: 30px;
                background-color: green;
                }
        </style>
        <?php
    }?>
