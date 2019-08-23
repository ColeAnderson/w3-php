<?php

    $car = array("volvo", "bmw", "toyota");
    echo "more on arrays later";
    $numbers = array(4, 6, 2, 22, 11);
    
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo count($cars); // outputs 3

    $arraylen = count($cars);
    for($i=0; $i <arraylen; $i++){
        echo $cars[$i];
        echo "<br>";
    }

    // sort array ascending order 
    sort($cars);
    // sort array descending order
    // reverse sort 
    rsort($cars);

?>