<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title>
    <style>
        /*estilizando a página*/
        body{
            font-family: Arial;
            background-color: #f0f0f0;
            text-align: center;
        }
        input, button{
            padding: 8px;
            margin: 5px
        }
    </style>
</head>
<body>
    <h1>Bem vindo ao PHP</h1>

    <form method="GET" action="">
        <label> Digite sua mensagem: </label><br>

        <input type="text" name="mensagem" required>

        <button type="submit">Enviar</button>
    </form>
    <p>
        <?php

            if (isset($_GET['mensagem'])){
                $mensagem = htmlspecialchars($_GET['mensagem']);

                echo "Voce digitou: <strong>$mensagem</strong>";
            }else{
                echo "Olá mundo! Este é meu primeiro código em PHP.";
            }
        ?>
    </p>
</body>
</html>