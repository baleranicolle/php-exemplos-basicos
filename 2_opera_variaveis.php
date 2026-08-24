<?php

//Passando valores pela URL (Método GET)
//http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5

//Recebe 2 valores
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

// Verifica se os valores foram passados corretamente
// A função nativa do PHP "isset" faz isso
if (isset( $numero1 ) && ( numero2 )) {
    $numero1 = (float) $numero1;
    $numero2 = (float) $numero2;
}
// Cálculos
$somar = $numero1 + $numero2;
$subtrair = $numero1 - $numero2;
$multiplicação = $numero1 * $numero2;
$divisão = $numero1 / $numero2;

// Exibição dos resultados
echo "Soma: $somar <br>";
echo "Subtração: $subtrair <br>";   
echo "Multiplicação: $multiplicação <br>";
echo "Divisão: $divisão <br>";
