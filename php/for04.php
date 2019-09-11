<?php
    $files = scandir(".");
    //print_r($files);
        //foreach, fbr-in / for-of



        foreach ($files as $f) {
            if($f == "." || $f == "..")continue;
            # code...
            echo "파일명: ",$f."\n";
        }






    // for($i=0;$i<count($files);$i++){
    //     if($files[$i]==".")continue;
    //     if($files[$i]=="..")continue;
    //     echo "파일명:".$files[$i]."\n";
        
    