<?php
$showstr="my name is david.";
echo $showstr ."<hr>";
$showarray=count_chars($showstr,1);
foreach($showarray as $i =>$val){
    echo "字元".chr($i)."出現了 $val 次 <br>";
}
?>