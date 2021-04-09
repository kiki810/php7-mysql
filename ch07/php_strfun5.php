<?php
$showstr1="大家";
$showstr2="****一起學****";
$showstr3="php!";
echo $showstr1.$showstr2.$showstr3."<br>";
echo $showstr1.trim($showstr2,"*").$showstr3."<br>";
echo $showstr1.ltrim($showstr2,"*").$showstr3."<br>";
echo $showstr1.rtrim($showstr2,"*").$showstr3."<br>";
echo $showstr1.chop($showstr2,"*").$showstr3;
?>