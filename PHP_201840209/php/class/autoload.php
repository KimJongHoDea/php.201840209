<?php
spl_autoload_register(function($className){
   // echo $className;
    $filename = $className.".php";
   // echo $filename."\n<br>";
   if(file_exists($filename)){
    require $filename;
   }
});
