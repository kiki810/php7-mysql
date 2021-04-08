<?php
srand((double)microtime()*10000000);
$randval=rand(0,5);
switch($randval){
    case "0";
    echo "頭獎";
    break;
    
    case "1";
    echo "二獎";
    break;
    
    case "2";
    echo "三獎";
    break;

    case "3";
    echo "四獎";
    break;

    case "4";
    echo "五獎";
    break;
    
    case "5";
    echo "安慰獎";
    break;

}
?>