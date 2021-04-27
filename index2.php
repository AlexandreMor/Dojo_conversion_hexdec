
<?php

function convert($color)
{
    if (strlen($color) === 7) {
        $hexa = str_replace("#", "", $color);
        if (ctype_xdigit($hexa) === true) {
            $color2 = str_split($hexa, 2);
            $colorR = base_convert($color2[0],16,10);
            $colorG = base_convert($color2[1],16,10);
            $colorB = base_convert($color2[2],16,10);
            $decimalColor = $colorR . ", " . $colorG . ", " . $colorB . ".";
        } else {
            return "La valeur entrée n'est pas valide.";
        }
    } else {
        return "La valeur entrée contient trop ou pas assez de caractères.";
    }
    return $decimalColor;
}

$color="#FF44BB";
var_dump(convert($color));