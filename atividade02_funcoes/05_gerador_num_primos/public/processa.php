<!-- Condições para um número ser primo:
É maior que 1: O número 1 não é considerado primo.
Possui apenas dois divisores: Um e ele mesmo.  -->
<?php
//session_start(); iniciando a sessao

// verifica o metodo de envio e trata o dado recebido
if(isset($_POST['numero'])){
    $num = htmlspecialchars($_POST['numero']);
    $num = (int)$num;
}

// função para verificar se o numero é primo
function verificaPrimo($n){
    if($n <= 1){
        return false;
    }
    //verifica se tem outros divisores além dele mesmo
    for ($i=2; $i<$n; $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}

// laço de repetição

for($i = 1; $i <= $num; $i++){
    if(verificaPrimo($i)){
        echo "<pre>";
        print_r($i);
        echo "</pre>";
    }
}

echo"<hr>";
echo "<a href='index.php'>Voltar</a>";

?>