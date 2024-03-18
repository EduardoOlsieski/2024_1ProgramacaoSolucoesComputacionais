<?php
    $x = 5;
    $y = 5.0;
    print("A soma é: ");
    echo($x + $y);

    if($x == $y) {
        echo("<br>Os valores das variáveis são iguais");
    }else{
        echo("<br>As variáveis são diferentes!");
    }
    if($x === $y) {
        echo("<br>As variaveis são idênticas!");
    }else{
        echo("<br>As variáveis NÃO são idênticas");
    }

    switch($x){
        case $y:
        echo("<br>$x é igual a $y");
        break;
       default:
       echo("<br>Valor default");
       
        }



?>

<hr>

<?php

for($i = 1; $i < 11; $i++){
    echo($i . "<br>");
}
echo("<hr>");
for($i = 11; $i < 21; $i+=2){
    echo($i . "<br>");
}

echo("<hr>");
for($i = 100; $i > 0; $i-=3){
    echo($i . "<br>");
}

//FUAQ some os números de 1 a 100 e apresente o resultado ao usuário. 
echo("<hr>");
$soma = 0;
for($i = 1; $i <= 100; $i++){
    $soma += $i;
    
}
echo("<br>Soma e 1 a 100 é: $soma");
//FUAQ some os números paresde 1 a 100 e apresente o resultado ao usuário. 
echo("<hr>");
$soma = 0;
for($i = 1; $i <= 100; $i++){
    if($i %2== 0){
        $soma += $i; 
    }
}   
echo("<br>A soma dos números pares de 1 a 100 é: $soma");

//FUAQ Faça o fatorisl de 5
echo("<hr>Fatorial");
$fatorial = 1;
for($i = 2; $i <= 5;$i++){
    $fatorial = $fatorial * $i;
}
echo("<br> O fatorial de 5 é: $fatorial");