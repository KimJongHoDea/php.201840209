<?php

$code = "jp";

switch($code){
    case "ko":
        ko();
        break;
    case "en":
        en();
        break;
    case "jp":
        jp();
        break;
    case "zh":
        zh();
        break;

}

function ko(){
    echo "한국어";
}
function en(){
    echo "영어";
}
function jp(){
    echo "이시국씨";
}
function zh(){
    echo "착짱죽짱";
}