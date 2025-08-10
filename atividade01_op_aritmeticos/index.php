<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <!-- Link para o CSS externo -->
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Calculadora: Operadores Aritméticos</h1>
    </header>
    
<div class="container">
    <div class="caixa">
        <form id="formCalculadora" method="POST" action="resultado2.php">
            <label>Digite o primeiro número:</label>
            <input type="number" id="num1" name="num1" required><br>
            <label>Digite o segundo número:</label>
            <input type="number" id="num2" name="num2" required><br>
            <label>Escolha a operação:</label>
            <select id="escolha" name="escolha">
                <option value="selecione">--Selecione--</option>
                <option value="soma">Soma (&plus;)</option>
                <option value="subtracao">Subtração (&hybull;)</option>
                <option value="multiplicacao">Multiplicação (&times;)</option>
                <option value="divisao">Divisão (&divide;)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>
</div>

    <!-- Link para o JavaScript externo -->
     <script src="js/script.js"></script>
</body>
</html>