<?php
session_start();
// if(isset($_POST['nome'])){
//     $nome = htmlspecialchars($_POST['nome']);
// }
// if(isset($_POST['idade'])){
//     $idade = htmlspecialchars($_POST['idade']);
// }
// if(isset($_POST['usuario'])){
//     $usuario = htmlspecialchars($_POST['usuario']);
// }
// if(isset($_POST['senha'])){
//     $senha = htmlspecialchars($_POST['senha']);
// }

// $campos = ['nome', 'idade', 'usuario', 'senha'];// temos os campos
// $dados=[] // array que vai receber apenas os campos "validados"

// foreach($campos as $campo){
//     if(isset($_POST[$campo])){
//         $dados[$campo] = htmlspecialchars($_POST[$campo]);
//     }else {
//         $dados[$campo] = null;
//     }
    
// }

$usuarios = [
    ['usuario' => 'isis', 'senha' => '1234']
    ['usuario' => 'maria', 'senha' => '4321']
]


?>