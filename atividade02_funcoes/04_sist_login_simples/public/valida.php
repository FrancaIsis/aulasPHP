<?php
session_start();
require 'usuario.php';

// para controlar o numero de tentativas vamos usar session
if(!isset($_SESSION['tentativas'])){
    $_SESSION['tentativas'] = 0;
}

if($_SESSION['tentativas'] > 3){
    die("Você atingiu o número máximo de tentativas.");// die significa que vai encerrar o código

}

//capturando os dados do formulario

$usuario = $_POST['usuario'] ?? ''; //Se a variável existe e não é null, use o valor dela.
$senha = $_POST['senha'] ?? '';

//variavel de controle
$login_valido = false;
$nome_usuario = '';

foreach($usuarios as $u){
    if($u['usuario']=== $usuario && $u['senha'] === $senha){
        $login_valido = true;
        break;
    }
}

// verifica o numero de tentativas do usuario
if(!$login_valido){
    $_SESSION['tentativas']++;
    echo "Login inválido";
}else{
    $_SESSION['tenttaivas'] = 0;
    session_regenerate_id(true);
    echo "Seja bem vindo!" $usuario;
}
?>