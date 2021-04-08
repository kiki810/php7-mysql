<?php
$msg="這是全域變數<br>";
function showMsg(){
    /*global $msg;//全域變數
    $msg="這是區域變數<br>";
    echo $msg;*/
    $GLOBALS['msg']="這是區域變數<br>";
    echo $GLOBALS['msg'];
}
echo $msg;
showMsg();
echo $msg;
?>