<?php
/*$x=2;
function showDouble($x){
    $x=$x * 2;
    echo"函式中的值:".$x."<br>";
}
showDouble($x);
echo "函式外的值:".$x."<br>";*/
$kt=5;
function house($kt){
    $kt=$kt+10;
    echo "自訂函式:".$kt."<br>";

}
house($kt);
echo "傳值呼叫:".$kt;

?>