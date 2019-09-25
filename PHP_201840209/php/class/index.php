<?php
// include "class01.php";
// include "class02.php";
include "autoload.php";
//greeting();

$obj1 = new left;

$obj1->daelim();
$obj1->greeting();
$obj1->name = "대림이";
$proprty = "name";

echo $obj1->$proprty."입니다.<br>";
echo "영어 코드는 =".$obj1::ENGLISH."<br>";
$obj2 = new right;
$obj2->name = "대숙이";

echo "\n<br>";
$result = $obj2->greeting();
var_dump($result);
echo "\n<br>";

$obj2->daelim();
$result->daelim();

//메소드 체인
echo "---<br>";
$obj2->greeting()->daelim()->foo()->bar();
echo "---<br>";
echo foo::$aaa;

foo::hello();
