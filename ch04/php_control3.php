<?php
$score=55;
if($score >=60 && $score <70){
    echo 'D';
}elseif($score >=70 && $score <80){
    echo 'C';
}elseif($score >=80 && $score <90){
    echo 'B';
}elseif($score>=90 && $score <=100){
    echo 'A';
}else{
    echo 'E';
}
?>