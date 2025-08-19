<?php
//inicia a sessão (sempre deve estar no topo da pagina antes de qualquer HTML)
session_start();

// verifica se o nome já foi enviado pelo formulário
if(isset($_POST['nome'])){
    //armazena o nome enviado na sessão
    $_SESSION['nome'] = $_POST['nome'];
}

?>

<!-- Formulario simples para o usuario digitar o nome -->
 <form method="POST">
    <label>Digite seu nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php
//verifica se já existe um nome armazenado na sessão
if (isset($_SESSION['nome'])){
    //exibe uma mensagem com o nome armazenado
    echo "<p>Olá, " .$_SESSION['nome'] . "!Seja bem-vindo de volta.</p>";
}
?>