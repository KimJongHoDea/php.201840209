<?php

function daelim($name, $num) : array
{
    echo "대림대학교<br>";
    $arr = [$name,$num];

    return $arr;
}

list($name,$num) = daelim("대림이",201840209);
//print_r($name);
echo $name[0]."=".$num[1];
// 1. 123
// 2. daelim
// 3. daelim1234
// 4. _ddd

