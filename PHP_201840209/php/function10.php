<?php

function daelim($name, $num) : array
{
    echo "대림대학교<br>";
    $arr = [$name,$num];

    return $arr;
}

include "function_11.php";//함수 선언
include "function_11.php";//함수 중복 처리
list($name,$num) = daelim("대림이",201840209);
//print_r($name);
echo $name."=".$num;
// 1. 123
// 2. daelim
// 3. daelim1234
// 4. _ddd

