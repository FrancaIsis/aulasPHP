<?php
session_start();

// remove todas as variáveis da sessão
session_unset();

// destroi a sessão no servidor
session_destroy();

// redireciona para login
header("Location: login.php");
exit();
?>