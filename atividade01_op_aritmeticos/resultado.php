<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Resultado:</h1>
    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = (float) $_POST['num1'];
            $num2 = (float) $_POST['num2'];
            $escolha = $_POST['escolha'];

            function soma($n1, $n2){ return $n1 + $n2; }
            function subtracao($n1, $n2){ return $n1 - $n2; }
            function multiplicacao($n1, $n2){ return $n1 * $n2; }
            function divisao($n1, $n2){
                if ($n2 == 0) {
                    return "O segundo número não pode ser zero";
                }
                return $n1 / $n2;
            }

            switch($escolha){
                case 'soma':
                    echo "O resultado de $num1 + $num2 é " . soma($num1, $num2);
                    break;
                case 'subtracao':
                    echo "O resultado de $num1 - $num2 é " . subtracao($num1, $num2);
                    break;
                case 'multiplicacao':
                    echo "O resultado de $num1 × $num2 é " . multiplicacao($num1, $num2);
                    break;
                case 'divisao':
                    echo "O resultado de $num1 ÷ $num2 é " . divisao($num1, $num2);
                    break;
                default:
                    echo "Operação inválida.";
            }
        } else {
            echo "Acesse o formulário para calcular.";
        }
        ?>
    </p>

    <a href="index.php">Fazer outro cálculo</a>
</body>
</html>
