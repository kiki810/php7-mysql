<?php 
function showResult($Num){
    if($Num >= 0){
        if($Num == 0){
            return 1;
        }
        else{
            $resultNum=1;
            for($n=$Num;$n>0;$n--){
                $resultNum *= $n;
            }
            return $resultNum;
        }
    }
}
echo "6的階層:".showResult(6);
?>