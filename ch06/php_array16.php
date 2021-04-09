<?php
$a = array(20,25,18,34,20,45);
$b = array('a','b','c','d','e','f');
array_multisort($a,SORT_DESC,$b,SORT_ASC);
for($i=0; $i<count($a);$i++){
    echo "$b[$i] 售價 $ $a[$i] <br>";
}
?>