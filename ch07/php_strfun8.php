<?php
$showstr="臺中市 烏日區 中山路一段497號";
$showaddress=explode(" ",$showstr);
foreach($showaddress as $value){
    echo $value."<br>";
}
?>