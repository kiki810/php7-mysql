<?php
$showstr="mr.你好，歡迎光臨文淵工作室";
echo $showstr."<br>";
echo strtr($showstr,"文淵工作室","大飯店")."<br>";
$replacestr=array("先生"=>"小姐","文淵工作室"=>"大飯店");
echo strtr($showstr, $replacestr)."<br>";
echo str_replace("文淵工作室","文淵", $showstr)."<br>";
echo substr_replace($showstr, "小姐", 0 , 4);

?>