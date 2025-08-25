<!-- 7. Conversor de Temperaturas
Crie um programa que converta temperaturas entre Celsius, Fahrenheit e Kelvin.
- Crie funções separadas para cada tipo de conversão.
- Peça ao usuário qual conversão deseja fazer e qual valor deseja converter.
- Utilize condicionais para escolher a função correta.
- Permita que o usuário repita quantas conversões quiser. -->
<?php
session_start();
$resultado='';
$mensagem= '';

if($_SERVER['REQUEST_METHOD']==='POST'){
    include 'public/processa.php';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperaturas</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1> Convertendo temperaturas </h1>
    </header>
    <main>
        <div class="container">
            <div class="caixa">
                <form action="" id="formTemp" method="POST">
                    <label>Digite uma temperatura:</label>
                    <input type="number" id="temp" name="temp" required>
                    <select name="formatoAtual" id = "formatoAtual">
                        <option value="">Selecione</option>
                        <option value="c">Celsius</option>
                        <option value="f">Fahrenheit</option>
                        <option value="k">Kelvin</option>
                    </select>
                    <label>Converter para:</label>
                    <select name="formatoNovo" id = "formatoNovo">
                        <option value="">Selecione</option>
                        <option value="c">Celsius</option>
                        <option value="f">Fahrenheit</option>
                        <option value="k">Kelvin</option>
                    </select>

                    <button type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>