<?php

function hexToDec($hexa)
{
    $values = array (0,1,2,3,4,5,6,7,8,9, 'A','B','C','D','E','F');
       $values = array_flip($values);
       $hexa = strrev($hexa);
       $hexaTab = str_split($hexa);
       $result=$i=0;
       foreach ($hexaTab as $key=>$item) 
       {
           $result += $values[$item]*pow(16,$key);
       return $result;
       }
}
var_dump(hexToDec($color));