<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$name=$_POST['name'];
$passwd = sha1($_POST['passwd']);
$pw2 = sha1($_POST['pw2']);
$phone = $_POST['phone'];
$email = $_POST['email'];
$type = $_POST['type'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $passwd != null && $pw2 != null && $passwd == $pw2)
{
    //新增資料進資料庫語法
    $sql = "INSERT INTO `user` (`id`, `name`, `passwd`, `email`, `phone`, `type`) values ('$id', '$name', '$passwd', '$email', '$phone','$type')";

    if($link->query($sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>