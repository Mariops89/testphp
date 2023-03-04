<?php

//Definición de arrays

$ans_test=[
    '1' => $_POST['p1'],
    '2' => $_POST['p2'],
    '3' => $_POST['p3'],
    '4' => $_POST['p4'],
    '5' => $_POST['p5'],
    '6' => $_POST['p6'],
    '7' => $_POST['p7'],
    '8' => $_POST['p8'],
    '9' => $_POST['p9'],
    '10' => $_POST['p10'],
];
$answers = [
    '1' => 'Servidor',
    '2' => '&lt;?php y ?>',
    '3' => 'Action',
    '4' => 'if (a===0) echo "hola mundo";',
    '5' => 'print (< strong>Hola Mundo < /strong>);',
    '6' => 'post y get',
    '7' => 'mysql_query',
    '8' => 'Un conjunto de elementos',
    '9' => 'En PHP no se define el tipo de variables explícitamente',
    '10' => 'Ninguno(no se puede sumar un número a una cadena)'
];



echo '<pre>', var_dump($answers), '</pre>';
echo 'Array de contestación';
echo '<pre>', var_dump($ans_test), '</pre>';
echo 'Este es el array:';

print_r(array_keys($ans_test));

echo $ans_test[1];

correct($answers, $ans_test);

function correct($a, $t) {
    //$long_a = count($a);
    //$long_t = count($t);
    for ($i=1;$i < 11;$i++) {
        if ($a[$i] == $t[$i]) {
            echo "La pregunta " . $i . ', ' . ($t[$i]) . ' es correcta';
        } else {
            echo "La pregunta " . $i . ', ' . ($t[$i]) . ' es incorrecta';
        }
    }

}
