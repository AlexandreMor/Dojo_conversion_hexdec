<?php

function convert($color)
{
    if (strlen($color) === 7) {
        $hexa = str_replace("#", "", $color);
        if (ctype_xdigit($hexa) === true) {

            $array_color = str_split($hexa, 1);
            $colorR = base_convert($array_color[0], 16, 10) * 16 ** 0 + base_convert($array_color[1], 16, 10) * 16 ** 1;
            $colorG = base_convert($array_color[2], 16, 10) * 16 ** 0 + base_convert($array_color[3], 16, 10) * 16 ** 1;
            $colorB = base_convert($array_color[4], 16, 10) * 16 ** 0 + base_convert($array_color[5], 16, 10) * 16 ** 1;

            return $rgb = $colorR . ", " . $colorG . ", " . $colorB;
        }
    }
}

var_dump(convert('#FF44BB'));
