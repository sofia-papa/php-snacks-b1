
<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php
  $array = [];

while (count($array) < 15) {
    $numeroRandomico = rand(0,100);

    if ( !in_array($array, $numeroRandomico)){
        array_push($array, $numeroRandomico);
    }
}

var_dump($array);
?>
