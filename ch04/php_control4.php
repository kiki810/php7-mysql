<?php
$direction ="東北";
switch($direction){
    case "東":
        echo "往東走";
        break;
    case "西":
        echo "往西走";
        break;
    case "南":
        echo "往南走";
        break;
    case "北":
        echo "往北走";
        break;
    default:
    echo "迷路";            
}

?>