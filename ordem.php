<?php   

$numeros = [15 , 10 , 35 , 20 , 18 , 30 , 5 , 60 , 45, 40];

echo "Os números que estão neste array são: " . '<br><br>';

// foreach($numeros as $num) {
//    echo $num . '<br>';
// }

$num_seq = implode(",", $numeros) . '<br><br>';
echo $num_seq;


echo '<br>' . "Os números deste array em ordem crescente fica da seguinte forma: " . '<br><br>';

sort($numeros);
$num_cresc = implode(",", $numeros) . '<br>';
echo $num_cresc;

//foreach($numeros as $num) {
//    echo $num . '<br>';
//}


echo '<br>' . "Os números deste array em ordem decrescente fica da seguinte forma: " . '<br><br>';

rsort($numeros);
$num_decresc = implode(",", $numeros) . '<br>';
echo $num_decresc;

//foreach($numeros as $num) {
//    echo $num . '<br>';
//}


// echo "Os numeros deste array são: " . $numeros;