<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado da Operação</h1>
    </header>
    <div class="container">
        <div class="caixa">
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
                        $escolha = htmlspecialchars($_POST['escolha']);
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
                        if($n2 == 0){
                            return false; 

                        }else{
                            return $n1 / $n2;
                        }                
                    }

                    switch($escolha){
                        case 'soma':
                            $resultado = soma($num1, $num2);
                            echo "O resultado de <strong>$num1 + $num2 é</strong> = <strong>$resultado</strong> <br>";
                            echo "<a href='index.php'>Fazer outro cálculo</a>";
                            break;
                        case 'subtracao':
                            $resultado = subtracao($num1, $num2);
                            echo "O resultado de <strong>$num1 - $num2 é</strong> = <strong>$resultado</strong><br>";
                            echo "<a href='index.php'>Fazer outro cálculo</a>";
                            break;
                        case 'multiplicacao':
                            $resultado = multiplicacao($num1, $num2);
                            echo "O resultado de <strong>$num1 &times; $num2 é</strong> = <strong>$resultado</strong><br>";
                            echo "<a href='index.php'>Fazer outro cálculo</a>";
                            break;
                        case 'divisao':
                            $resultado = divisao($num1, $num2);
                            if ($resultado=== false){
                                echo "Erro: Divisão por zero não é permitida.<br> <a href='index.php'>Voltar</a>";
                            } else{
                                echo "O resultado de <strong>$num1 &divide; $num2 é</strong> = <strong>$resultado</strong><br>";
                                echo "<a href='index.php'>Fazer outro cálculo</a>";
                            }
                            break;
                        default:
                            echo "Operação inválida";
                            break;
                    }
                ?>
            </p>            

     

        </div>
    </div>
</body>
</html>