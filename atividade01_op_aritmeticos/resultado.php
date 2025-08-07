<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <!-- Título da página -->
     <h1>Resultado:</h1>
     <p>
        <?php
            //verificando se os numeros foram enviados através do formulário
            if(isset($_POST['num1'])){
                $num1 = htmlspecialchars($_POST['num1']);
            }
            if(isset($_POST['num2'])){
                $num2 = htmlspecialchars($_POST['num2']);
            }
            if(isset($_POST['escolha'])){
                $operacao = htmlspecialchars($_POST['escolha']);
            }

            // funções
            function soma($n1, $n2){
                return $n1 + $n2;
            }

            function subtracao($n1, $n2){
                return $n1 - $n2;
            }

            function multiplicacao($n1, $n2){
                return $n1 * $n2;
            }

            function divisao($n1, $n2){
                if($n2 === 0){
                    return "O segundo número não pode ser zero";
                }else{
                    return $n1 / $n2;
                }                
            }

            switch($operacao){
                case 'soma':
                    $resultado = soma($num1, $num2);
                    echo "O resultado de $num1 + $num2 é $resultado";
                    break;
                case 'subtracao':
                    $resultado = subtracao($num1, $num2);
                    echo "O resultado de $num1 - $num2 é $resultado";
                    break;
                case 'multiplicacao':
                    $resultado = multiplicacao($num1, $num2);
                    echo "O resultado de $num1 &times; $num2 é $resultado";
                    break;
                case 'divisao':
                    $resultado = divisao($num1, $num2);
                    echo "O resultado de $num1 &divide; $num2 é $resultado";
                    break;
                default:
                    echo "Operação inválida";
                    break;
            }
        ?>
    </p>

    <!-- Link para voltar à página do formulário -->
     <a href="index.php">Fazer outro cálculo</a>

    
</body>
</html>