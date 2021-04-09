<?php
for($i=2; $i <=9; $i++){
    for($j=1; $j <=9; $j++){
        $a[$i][$j]=$i * $j;
    }
}
foreach($a as $b =>$b1){
    foreach($b1 as $c =>$c1){
        echo $b ."*".$c."=".$c1."<br>";
    }
}


?>