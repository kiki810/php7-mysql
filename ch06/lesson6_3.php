<?php
$testArray=range(1,42,1);
shuffle($testArray);
$result=array_slice($testArray,0,6);
sort($result);
echo "lottery:<br>";
foreach($result as $val){
    echo $val."<br>";
}
?>