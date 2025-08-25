<?php

// verifica o metodo de envio e trata o dado recebido
if(isset($_POST['temp'])){
    $num = htmlspecialchars($_POST['temp']);
    $num = (int)$num;
}
if(isset($_POST['formatoAtual'])){
    $atual = htmlspecialchars($_POST['formatoAtual']);    
}
if(isset($_POST['formatoNovo'])){
    $novo = htmlspecialchars($_POST['formatoNovo']);    
}


function convertCelsiusFahrenheit($t){
    $f = $t*1.8+32;
    return $f;

}
function convertCelsiusKelvin($t){
    $k = $t+273.15;
    return $k;
}

function convertFahrenheitCelsius($t){
    $c = ($t-32)/1.8;
    return $c;
}

function convertFahrenheitKelvin($t){
    $c = convertFahrenheitCelsius($t);
    $k = convertCelsiusKelvin($c);
    return $k;
}

function convertKelvinCelsius($t){
    $c = $t-273.15;
    return $c;
}

function convertKelvinFahrenheit($t){
    //primeiro converte para celsius
    $c = convertKelvinCelsius($t);
    $f = convertCelsiusFahrenheit($c);
    return $f;
}
// mapa associativo de funções
$funcoes = [
    'cf' => 'convertCelsiusFahrenheit',
    'ck' => 'convertCelsiusKelvin',
    'fc' => 'convertFahrenheitCelsius',
    'fk' => 'convertFahrenheitKelvin',
    'kc' => 'convertKelvinCelsius',
    'kf' => 'convertKelvinFahrenheit'
];

$unidades = [
    'c' => '°C',
    'f' => '°F',
    'k' => 'K'
];

$chave = $atual . $novo;

if (isset($funcoes[$chave])) {
    $resultado = $funcoes[$chave]($num); // chama a função dinamicamente
} else {
    $resultado = $num; //na lista do array associativo nao vai ter tipo cc ou ff
}

if ($resultado != $num){
    echo $num.$unidades[$atual]."=".$resultado.$unidades[$novo];
}
else{
    echo "A conversão proposta não é valida.";
}
?>