<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de estruturas de repetição em PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <!-- Cabeçalho da página -->
     <header>
        <h1>Exemplo de estruturas de repetição em PHP</h1>
    </header>

    <!-- conteudo principal da pagina -->
    <main>
        <!-- Secção que exibe o loop for -->
        <section>
            <h2>Estrutura FOR</h2>
            <div class="caixa">
                <?php
                    // inclui o arquivo PHP que contem as funções
                    // em seguida, executa a função que exibe o loop for
                    include "processa.php";
                    exibirFor();
                ?>
            </div>
        </section>
        <!-- Secção que exibe o loop WHILE -->
        <section>
            <h2>Estrutura WHILE</h2>
            <div class="caixa">
                <?php
                    // CHAMA A FUNÇÃO QUE EXIBE O WHILE                  
                    
                    exibirWhile();
                ?>
            </div>
        </section>
        <!-- Seção que exibe o loop FOREACH -->
        <section>
            <h2>Estrutura FOREACH</h2>
            <div class="caixa">
                <?php
                    // CHAMA A FUNÇÃO QUE EXIBE O LOOP FOREACH            
                    
                    exibirForeach();
                ?>
            </div>
        </section>        
    </main>
    <!-- Rodapé da página -->
    <footer>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>
</body>
</html>