<?php
session_start();
session_destroy();

// Redireciona para a página de logar
header("Location: 15a_sistema.php");
?>