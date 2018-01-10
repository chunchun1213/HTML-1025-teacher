<body background="img/m.jpg"></body>

<style>
    p {
border-style:solid;
        border: #5137ff 5px solid;
        background-color: powderblue;
}
b{
        position:relative;
        top:10px;
        left:50%;
}
</style>

<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

echo '<a href="logout.php"><b>登出</b></a> <br><br>';

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
    echo '<a href="insert.php"><b>新增</b></a>    ';
    echo '<a href="update.php"><b>修改</b></a>    ';
    echo '<a href="delete.php"><b>刪除</b></a><br><br>';

    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "SELECT * FROM user";
    $result = $link->query($sql);
    while($row =$result->fetch_row())
    {
        echo "<p>帳號:$row[0] <br>姓名：$row[1]<br> " .
            "email：$row[3]<br>電話：$row[4]<br>權限：$row[5]<br><br></p>";
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>