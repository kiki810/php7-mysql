<?php
/*$x=2;
function showDouble(&$x){
    $x=$x * 2;
    echo"函式中的值:".$x."<br>";
}
showDouble($x);
echo "函式外的值:".$x."<br>";*/

$kt=5;
function park(&$kt){
    $kt=$kt+10;
    echo"函式中的值:".$kt."<br>";
}
park($kt);
echo"第一次呼叫:".$kt."<br>";
park($kt);
echo "第二次呼叫:".$kt;

?>