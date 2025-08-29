<?php

if(isset($_POST['num'])){
    $num = htmlspecialchars($_POST['num']);
    $num = (int)$num;
}

// função para verificar a tentativa do usuario
function verificaTentativa($num, $numSecreto){
    if($num < $numSecreto){
        return "Um pouco mais";
    } elseif($num > $numSecreto){
        return "Um pouco menos";
    }else{
        return "Acertou";
    }
}
// verificando se o usuario quer jogar ou sair do jogo
if ($acao=='sair'){
    $_SESSION['mensagem'] = "Você saiu do jogo! Até a próxima!";
        unset($_SESSION['numSecreto']);
        unset($_SESSION['numTentativas']);
    }
        header("Location: index.php");
        exit;

if ($acao=='calcular'){
    $numUsuario = $num;
    $palpite = $_SESSION['numSecreto'];
    $_SESSION['tentativas']++;
    //chama a função
    $resultado = verificaTentativa($numUsuario,$palpite);

    if($resultado == "Acertou"){
        $_SESSION['mensagem'] = "Parabéns! Você concluiu o desafio após {$_SESSION['numTentativas']} tentativas!";
    
         while (isset($_SESSION['numero'])) {
            unset($_SESSION['numero']);
            unset($_SESSION['tentativas']);
            }
        }else {
            $_SESSION['mensagem'] = $resultado;
        }
    header("Location: index.php");
    exit; 
}
?>