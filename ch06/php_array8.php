<?php
$season = array('春','夏','秋','冬');

/*echo "四季:";
foreach ($season as $value){
    echo $value;
}*/

$aNum=count($season);
echo "season:";
for($i=0; $i<$aNum; $i++){
    echo $season[$i];
}

?>
