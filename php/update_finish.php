<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$name=$_POST['name'];
$passwd = $_POST['passwd'];
$pw2 = $_POST['pw2'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$type = $_POST['type'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $passwd != null && $pw2 != null && $passwd == $pw2)
{
    $id = $_SESSION['username'];

    //更新資料庫資料語法
    $sql = "update user set name='$name',passwd='$passwd', phone='$phone', email='$email', type='$type' where id='$id'";
    if($link->query($sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>