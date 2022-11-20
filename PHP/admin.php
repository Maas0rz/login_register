<?php
    header ("Content-Type:text/html; charset=UTF-8");

    if (isset($_COOKIE["username"])&&$_COOKIE["username"]=="admin"&&$_COOKIE["password"]=="password"){
        echo "欢迎您，".$_COOKIE["username"]."!<br/>";
        echo "这里什么也没有，你不用再看了！"."<br/>";
        echo '<a href="./logout.php">退出登录</a>';
    }
    else{
        echo "权限不足或账户错误！"."<br/>";
        echo "3秒后将自动为您跳转到首页。";
        echo '<meta http-equiv="Refresh" content="3;url=./login.html"/>';
    }
 
?>