<?php
$a=array("學號"=>101, "姓名"=>"aa", "性別"=>"女", "生日"=>"2000/03/14", "電話"=>"(02)12345678");
$b=array("學號"=>102, "姓名"=>"bb", "性別"=>"女", "生日"=>"2000/03/14", "電話"=>"(02)12345678");
$c=array("學號"=>103, "姓名"=>"cc", "性別"=>"男", "生日"=>"2000/03/14", "電話"=>"(02)12345678");
$d=array("學號"=>104, "姓名"=>"dd", "性別"=>"男", "生日"=>"2000/03/14", "電話"=>"(02)12345678");
$e=array("學號"=>105, "姓名"=>"ee", "性別"=>"男", "生日"=>"2000/03/14", "電話"=>"(02)12345678");
$student=array($a,$b,$c,$d,$e);

echo "學號:".$student[4]['學號']."<br>";
echo "姓名:".$student[4]['姓名']."<br>";
echo "性別:".$student[4]['性別']."<br>";
echo "生日:".$student[4]['生日']."<br>";
echo "電話:".$student[4]['電話']."<br>";
?>