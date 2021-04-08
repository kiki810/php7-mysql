<?php
function testfun1(){
    echo "自訂函式一<br>";
}
function testfun2(){
    echo "自訂函式二<br>";
}
$calltest="testfun1";
$calltest();
$calltest="testfun2";
$calltest();
?>