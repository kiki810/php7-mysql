<?php
//若有接收到$_POST["sendmail"]的值表示表單有經過送出動作，即開始進行以寄發郵件的動作。
if(isset($_POST["sendmail"]) && ($_POST["sendmail"] == "true")){
    $mailFrom="=?UTF-8?B?" .base64_encode($_POST["fromname"]) . "?= <".$_POST["frommail"].">";//寄件人的姓名以MIME規範的方式進行編碼轉換再加上寄件人的電子郵件
    $mailto="devid@e-happy.com.tw"; //指定收件人信箱
    $mailSubject="=?UTF-8?B?" .base64_encode($_POST["mailsubject"]) ."?=";//信件標題以MIME規範的方式進行編碼
    //信件表頭加入寄件人的資料，並設定信件內容的編碼方式
    $mailHeader="From:".$mailFrom."\r\n";
    $mailHeader.="Content-type:text/html;charset=UTF-8";
    mail($mailto,$mailSubject,$_POST["mailcontent"],$mailHeader);//使用mail()函式執行寄件動作
}
?>
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
    //若有接收到$_POST["sendmail"]的值表式表單有經過送出動作，即顯示寄出成功訊息，即回上一頁連結文字
    if(isset($_POST["sendmail"]) && ($_POST["sendmail"] == "true")){
    ?>
    寄件成功，<a href="php_formtomail.php">再寄一次</a>
    <?php }else{ ?>
    <form name="form1" method="POST" action="">
        <table border="0" cellpadding="4" cellspacing="0">
            <tr>
                <td>name</td>
                <td><input type="text" name="fromname" id="fromname"></td>
            </tr>
            <tr>
                <td>mail</td>
                <td><input type="text" name="frommail" id="frommail"></td>
            </tr>
            <tr>
                <td>title</td>
                <td><input type="text" name="mailsubject" id="mailsubject"></td>
            </tr>
            <tr>
                <td colspan="2"><textarea name="mailcontent" id="mailcontent" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="button" id="button"  value="送出">
            <input name="sendmail" type="hidden" id="sendmail" value="true"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>