<?php
$showstr="genius is one percent inspiration and ninety-nine percent perspiration.";
echo "聰明的人得失心重， 有智慧的人勇於捨得。<hr>";
$tok=strtok($showstr, "");
while($tok){
    echo "$tok<br>";
    $tok = strtok(" ");
}
?>