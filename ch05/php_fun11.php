<?php
function showResult($Num){
    if($Num == 0){
        return 1;
    }else{
        return $Num * showResult($Num-1);
    }
}
echo "5的階層:".showResult(5);
?>