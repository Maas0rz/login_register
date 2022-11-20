<?php
 
    header ("Content-Type:text/html; charset=UTF-8");

    if (isset($_COOKIE["username"])){
        echo "欢迎您，".$_COOKIE["username"]."!<br/>";
        echo "空空如也！"."<br/>";
        echo '<a href="./logout.php">退出登录</a>';
    }
    else{
        echo "账户错误！"."<br/>";
        echo "3秒后将自动为您跳转到首页。";
        echo '<meta http-equiv="Refresh" content="3;url=./login.html"/>';
    }
 
?>