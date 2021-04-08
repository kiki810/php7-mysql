<?php
srand((double)microtime()*100000);
for($i=0;$i<6;$i++){
    $a=rand(1,42);
    echo "第".($i+1)."組號碼:".$a."<br>";
}
?>