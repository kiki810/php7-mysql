<?php
$city1=array(
    "中正區" =>100,"大同區" =>103,"中山區" =>104,"松山區" =>105,"大安區" =>106,"萬華區" =>108,"信義區" =>110,"士林區" =>111,"北投區" =>112,"內湖區" =>114,"南港區" =>115,"文山區" =>116
);
$city2=array(
    "中區" =>400,"東區" =>401,"南區" =>402,"西區" =>403,"北區" =>404,"北屯區" =>406,"西屯區" =>407,"南屯區" =>408
);
$city=array("台北市" =>$city1, "台中市" =>$city2);
echo "台北市信義區郵遞區號".$city['台北市']['信義區'];
?>