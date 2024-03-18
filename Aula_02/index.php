<?php

$carros = array("Doblo","Opala","Renegade") ;   

foreach ($carros as $car){
    echo $car . "<br>";
}

echo" Meu caro: $carros[0]<hr>";
print_r($carros);
echo "<hr>";
var_dump($carros);

?>
