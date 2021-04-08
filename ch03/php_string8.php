<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$language = "php";
//nowdoc 語法結構表示字串
$showStr = <<<'Msg'
網頁程式$language <br>
"it's easy, it's good."
Msg;
echo $showStr;
?>
</body>
</html>