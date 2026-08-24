<?php

// Exemplo de função em PHP (uma função sempre tem retorno)
function somar(float $a, float $b): float {
    return $a + $b;
}

//Chamando a função
echo somar(4.5, 9.3);
echo "<br>";

//Exemplo de procediemnto (Não tem return, pois não calcula)
function saudacao(string $nome = "Aluno") {
    echo "Olá, $nome! Seja Bem-Vindo(a)!!";
}

// Usando/Exibindo (procedimento)
saudacao("Maria Smart");
echo "<br>";
saudacao("Mary Lost");