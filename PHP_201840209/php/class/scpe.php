<?php
    $a =5;

    echo "start= ".$a;

    function num(){
        echo "num= ".$GLOBALS['a'];
        echo "num=".$a;
        
    }

    num();
    echo "end= ".$a;
    echo "<br>";
    echo $_SERVER['REQUEST_URI'];