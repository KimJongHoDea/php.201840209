<?php

interface greeting{
    
    public function hello();
}

//인터페이스를 구현해서 클래스를 만들어 강제 명령
class daelim implements greeting{


    public function hello(){
        echo"고냥 해버림";
    }


}
$obj = new daelim;
$obj->hello();