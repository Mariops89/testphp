<?php

//echo '<pre>'; //echopre
//print_r($_POST);
//echo '</pre>';
//die;

//Definición de arrays
$solutions = [
    'p1' => 'b',
    'p2' => 'a',
    'p3' => 'c',
    'p4' => 'b',
    'p5' => 'b',
    'p6' => 'c',
    'p7' => 'a',
    'p8' => 'c',
    'p9' => 'c',
    'p10' => 'd'
];

$results = correct($solutions, $_POST);

echo json_encode([
    'solutions' => $solutions,
    'wrong' => $results['wrong'],
    'success' => $results['success'],
    'nota' => $results['nota']
]);



function correct($solutions, $answers) : array
{
    $wrong = [];
    $success = [];
    $nota = 0;
    foreach ($answers as $question => $answer) {
        if ($solutions[$question] == $answer) {
//            echo "La pregunta $question es correcta";
            $success[] = $question . $answer;
            $nota = $nota + 1;
        } else {
            $wrong[] = $question . $answer;
            $nota = $nota - 0.5;
        }
    }

    if ($nota < 0) {
        $nota = 0;
    }

    return [
        'wrong' => $wrong,
        'success' => $success,
        'nota' => $nota
    ];
}

