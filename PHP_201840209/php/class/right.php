<?php
class right{
    function greeting()
    {
    echo "right hello :".$this->name."<br>";
    return $this;
    }
    public static function daelim(){
        echo "대림대학교";
        
    }
    
    public static function foo(){
        echo "너는 바보야<br>";
        
    }
    public static function bar(){
        echo "나도 바보야<br>";
        
    }
}
