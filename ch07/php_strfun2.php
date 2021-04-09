<?php
$showstr="你學<strong>php</strong><br>我學<strong>php</strong><br>大家學<strong>php</strong>";
echo $showstr."<hr>";
echo strip_tags($showstr,'<br>');
?>