<?php
/**
 * Created by PhpStorm.
 * User: 傅琬鈞
 * Date: 2018/1/6
 * Time: 下午 09:56
 */
session_start();?>
<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
<?php
unset($_SESSION['username']);
echo '登出中...';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
