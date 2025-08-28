<!-- 9. Jogo de Adivinhação
 Crie um jogo onde o computador gera um número aleatório de 1 a 100
 e o usuário deve adivinhar.-Crie uma função que valide o palpite e retorne 
 se o número é maior, menor ou correto.-Use laços de repetição para permitir várias tentativas.-
 Mostre ao final quantas tentativas o jogador precisou para acertar -->
<?php
session_start();
//cria o numero secreto
if(!isset($_SESSION['numSecreto'])){
    $_SESSION['numSecreto'] = rand(1,100);
    $_SESSION['numTentativas'] = 0;
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    include 'public/processa.php';
    $acao = $_POST['acao'];

}
?>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1> Jogo de adivinhação</h1>
    </header>
    <main>
        <div class="container">
            <div class="caixa">
                <form action="" id="formAdivinha" method="POST">
                    <label>Estou pensando em um número inteiro de 1 a 100. Qual é esse número?:</label>
                    <input type="number" id="numUsusario" name="numUsuario" min=1 max=100 required>
                   
                    <button type="submit" value="calcular" name="acao">Adivinhar</button>
                    <button type="submit" value="sair" name="acao">Sair</button>
                </form>


            </div>
            <a id="voltar" href="index.php">Voltar</a>
        </div>
    </main>
 

</body>
</html>