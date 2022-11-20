<?php
    header('Content-Type:text/html;charset=utf-8');
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connect = mysql_connect("localhost", "root", "root"); //修改为您的数据库信息
    if(!$connect)
        die("数据库连接失败！");
    mysql_select_db("user_information", $connect); //修改为您的数据库信息
    $words = "INSERT INTO register (username, password) VALUES ('$username', '$password')"; //修改为您的数据库信息 //注意MySQL语句内要用单引号
    $rezult = mysql_query($words);
    if($rezult){
        echo "注册成功，将为您跳转至登录界面！";
        echo '<meta http-equiv="Refresh" content="3; url=./login.html"/>';
    }
    else{
        echo "系统原因，注册失败！";
        echo '<meta http-equiv="Refresh" content="3; url=./register.html"/>';
    }
    mysql_close($connect);
 
?>