<?php 
    echo"Laço de repetição FOR <br>";

    $frutas = array("Maça","Banana","Morango","Uva", "abacaxi", "Pera", "Mamão","Melão", "Melancia", "Jaca"
    , "Fruta do Conde", "Jaboticaba", "Caju", "Açai", "Bergamota", "Laranja") ;  

    $size = count ($frutas);    // conta a quantidade de frutas

    //imprimir o meu array na tela

    for ($i= 0; $i<14; $i++) {
        echo $frutas[$i] . "<br>";
    }

?>