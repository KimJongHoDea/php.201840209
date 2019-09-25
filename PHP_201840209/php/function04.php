<?php
function korean()
{
    echo "안녕하세요";
}

function english(){
    echo "hello";
}
$lang = "ko";
if($lang == "ko")$fff = "korean";
else $fff = "english";

$fff();