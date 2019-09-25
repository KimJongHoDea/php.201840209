<?php
function hello($name="++",$a,$b){
    $sum = $a+$b;
    echo "반가c워요".$name."=".$sum;
    return $sum;
}

$user = "대남이";
hello($user,1,2);

echo "합계는=".$s;