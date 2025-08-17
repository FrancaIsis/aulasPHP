
<?php
$num = (int) $_POST['numero'];

// criando a função
function tabuada($n, $x){
    return $n * $x;
}

// estrutura de repetição
for($i=1; $i <=10; $i++){
    $resultado = tabuada($num, $i);
    echo $num ." (&times;) ". $i ." = " .$resultado."<br>";
}

?>
