<?php
$season=13;
if($season>=1 && $season <=3){
    echo "春";
}elseif($season >=4 && $season <=6){
    echo "夏";
}elseif($season >=7 && $season <=9){
    echo "秋";
}elseif($season >=10 && $season <=12){
    echo"冬";
}else{
    echo "none";
}
?>