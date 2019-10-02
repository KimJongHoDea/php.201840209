<?php
    echo"파일 목록을 출력합니다.";
    files("./");
    $files($path);

    function files($path){
    $files = scandir($path);
    // print_r($files);
    for($i=0;$i<count($files);$i++){
        if($files[$i] == ".git"){
            continue;
        }
        if($files[$i] == ".."){
            continue;
        }
        if(is_dir($files[$i])){
            files($path.DIRECTORY_SEPARATOR.$files[$i]);
            echo "<b>".$path.$files[$i]."</b><br>";
            
            
        } 
        else{

                echo "".$files[$i]."<br>";
            }
            
        
        
    }
}