<?php
session_start();//necesario para manipular variáveis de sessão
require'usuarios.php';// inclui nosso "banco de dados" de usuarios

//captura dados enviados pelo formulario
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

//Variável de controle
$login_valido = false;
$nome_usuario = '';

// percorre o array de usuarios para verificar credenciais
foreach ($usuarios as $u){
    if($u['usuario'] === $usuario && $u['senha'] === $senha){
        $login_valido = true;
        $nome_usuario = $u['nome'];
        break;
    }
}

if($login_valido){
    //gera novo ID de sessão para segurança
    session_regenerate_id(true);

    //armazena informações na sessão
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $nome_usuario;
    $_SESSION['ultimo_acesso'] = time();// para controle de inatividade

    //  redireciona para área restrita
    header("Location: restrita.php");
    exit();
} else {
    // guarda mensagem de erro e volta para login
    $_SESSION['erro'] = "Usuário ou senha inválidos!";
    header("Location: login.php");
    exit();
}
?>