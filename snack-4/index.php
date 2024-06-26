<?php


function NumberGenerator($min, $max, $count)
{




    $numbers = range($min, $max);


    shuffle($numbers);


    return array_slice($numbers, 0, $count);
}



$randomNumbers = NumberGenerator(1, 100, 15);


echo "Numeri casuali:";
foreach ($randomNumbers as $number) {
    echo $number;
}
