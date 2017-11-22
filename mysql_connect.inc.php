<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:58
 */
?>
<head>
<meta http-equiv="Content-Type"content="text/html";charset="utf-8"/>
</head>

<?php
$db_server="localhost";
$db_name="mydb";
$db_user="root";
$db_user="1234";
if(!@mysql_connect($db_server,$db_user,$db_passed))
    die("無法對資料庫連線");
mysql_query("SET NAMES utf8");
if(!@mysql_select_db($db_name))
    die("無法使用資料庫")
?>