<?php
$showstr="('工作室'[網址])http://www.google.com.tw?aboutme=true";
echo $showstr."<hr>";
echo quotemeta($showstr)."<hr>";
echo addslashes($showstr)."<hr>";
echo addcslashes($showstr,"'[]'")."<hr>";
$showstr1=addslashes($showstr);
$showstr2=addcslashes($showstr,"'[]");
echo stripslashes($showstr1)."<hr>";
echo stripslashes($showstr2);
?>