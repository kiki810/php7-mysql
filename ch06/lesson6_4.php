<?php
$testArray=range(1,42,1);
//shuffle($testArray);
$result=array_rand($testArray,6);
sort($result);
echo "lottery:<br>";
foreach($result as $val){
    echo $testArray[$val]."<br>";
}
?>