<?php
    session_start();// inicia a sessão
    if(isset($_POST['frase'])){
        $frase = htmlspecialchars($_POST['frase']);
    }

    $array_frase = str_split(strtolower($frase));//função para transformar a frase em um array
    $vogais = ['a','e','i','o','u'];
    //array associativo
    $contagem = [
        'a'=> 0,
        'e'=> 0,
        'i'=> 0,
        'o'=> 0,
        'u'=> 0
    ];

    //percorrendo o array
    foreach($array_frase as $fr){
        if(in_array($fr,$vogais)){//Se o caractere atual está dentro do array de vogais, então faça algo.
           $contagem[$fr]++;// dentro do array contagem a gente olha qual vogal corresponde ao fr atual e soma 1
        }
    }

    //exibindo o array
    echo"<hr>";
    echo "A frase <strong>$frase</strong> possui as vogais abaixo:";
    echo "<pre>";
    print_r($contagem);
    echo "</pre>";

?>