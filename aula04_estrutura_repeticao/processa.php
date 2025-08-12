<?php
function exibirFor(){
    for($i = 1; $i <= 5; $i++){
        echo "Contagem com FOR: $i<br>";
    }
}

// função while
function exibirWhile(){
    $i = 1;
    while ($i <= 5){
        echo "Contagem com While: $i<br>";
        $i ++;
    }
}

// função com FOREACH
function exibirForeach(){
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
    foreach ($frutas as $fruta){
        echo "Fruta: $fruta<br>";
    }
}
?>