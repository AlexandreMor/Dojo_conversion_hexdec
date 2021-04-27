<?php

function convert($color)
{
    if (strlen($color) === 7) {
        $hexa = str_replace("#", "", $color);
        if (ctype_xdigit($hexa) === true) {
            $color2 = str_split($hexa, 2);
            $colorR = hexdec($color2[0]);
            $colorG = hexdec($color2[1]);
            $colorB = hexdec($color2[2]);
            $decimalColor = $colorR . ", " . $colorG . ", " . $colorB . ".";
        } else {
            return "La valeur entrée n'est pas valide.";
        }
    } else {
        return "La valeur entrée contient trop ou pas assez de caractères.";
    }
    return $decimalColor;
}

$color = "#FF44BB";
/*var_dump(convert($color));*/
$number = [];
for ($i = 0; $i < 10; $i++) {
    $number[] = $i;
}

$a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
$b = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];

$c = [];
$d = [];


function calcul(string $colorColor) 
{
    $colorColor = str_replace("#", "", $colorColor);
    $colorColor = str_split($colorColor, 1);
    $c = [];
    foreach ($colorColor as $letterNumber) {
        $a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $b = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
        if (in_array($letterNumber, $b)) {
            for ($i = 0; $i < count($b); $i++) {
                if ($letterNumber === $b[$i]) {
                    $b[$i] = $a[$i]; // $b[$i] = 15
                    $c = $b[$i];
                }
            }
        }
        var_dump($c);
    }
    
    /*$a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
    $b = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];

    for ($i = 0; $i < count($a); $i++) {
        $b[$i] = $a[$i];
        $d = 16;
        $c = [$b[$i] * $d**0 + $b[$i] * $d**1];
        var_dump($c);
    }*/  
}
$colorColor = "#FF44BB";
echo calcul($colorColor); // 15 15 4 4 11 11 

