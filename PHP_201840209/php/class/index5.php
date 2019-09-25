<?php

abstract class greeting{
    abstract function hello();
    public function pages(){
        echo"페이지 출력";
    }

}

//인터페이스를 구현해서 클래스를 만들어 강제 명령
class daelim extends greeting{




     public function hello(){
         echo"고냥 해버림<br>";
    }
    
}
$obj = new daelim;
$obj->hello();
$obj->pages();