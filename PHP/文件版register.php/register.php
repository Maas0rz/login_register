<?php
    header ("Content-Type:text/html; charset=UTF-8");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $filename = md5($username).".txt";
    $path = "./account/$filename";
    if(file_exists($path)){
        echo "该用户已存在！"."<br/>";
        echo "<a href=./register.html>返回注册</a>";
    }
    else{
        $file = fopen($path, "w");
        $content = "注意，已进行md5加密！"."\n\n"."username:".md5($username)."\n"."password:".md5($password);
        fwrite($file, $content);
        echo "注册成功！"."<br/>";
        echo "<a href=./login.html>立即登录</a>";
    }
 
?>