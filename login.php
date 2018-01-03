<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:49
 */
?>
<html>
<head>
    <meta http-equiv="Content-Type"content="text/html";charset="utf-8"/>
</head>

<style>
    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        /*text-align: center;*/
        align:center;
        /*width:100%;*/
    }
    .imgcontainer img{
        width:150px;
        height:150px;
        border-radius: 50%;
    }
    /*img.avatar {*/
        /*width: 40%;*/
        /*border-radius: 50%;*/
    /*}*/

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>
<body>

<h2>Login Form</h2>

<form name="form"method="post"action="connect.php">
    <div class="imgcontainer" align="center">
        <img src="img/login.jpg" alt="Avatar" class="avatar" width="150px" height="150px">
    </div>

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="id" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pw" required>

        <button type="submit">Login</button>
        <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>

</body>


</html>