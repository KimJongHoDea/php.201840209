<?php

//재귀함수

function hello(){

    echo "1. 안녕하세요<br>";
    yield "1";
    echo "2. 바이<br>";
    yield "2";
    echo "3. 끝남<br>";
    yield "3";
    echo "4. 그래도 할게 남음<br>";

}
hello();