<?php

//1. Crie uma função que recebe dois números, e retorna a soma, a diferença e a multiplicação entre os dois números.

$v1 = $_POST['V2'];
$v2 = $_POST['Vr2'];
$resultado = somaValores ($v1,$v2);
echo "Soma dos Valores: $resultado";
function somaValores($a,$b) {
 if ($a>$b)
{
    $resultado = $a + $b;

}
return $resultado;
}

$resultad = diferencaValores ($v1,$v2);
echo "Diferença doa Valores: $resultad";
function diferencaValores($a,$b) {
 if ($a>$b)
{
    
    $resultad = $a - $b;
    
}
return $resultad;
}

$resulta = multiValores ($v1,$v2);
echo "Multiplicação dos Valores : $resulta";
function multiValores($a,$b) {
 if ($a>$b)
{
    
    $resulta = $a * $b;

}
return $resulta;
}
?>