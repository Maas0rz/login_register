<?php
 
    header("Content-Type:text/html; charset=UTF-8");
 
    if($_POST['username']=="admin"&&$_POST['password']=="password"){
        setcookie('username', $_POST['username'], time()+10086);
        setcookie('password', $_POST['password'], time()+10086);
        header("Location:./admin.php");
    }
    $connect = mysql_connect("localhost", "root", "root"); //修改为您的数据库信息
    if(!$connect)
        die("数据库连接失败！");
    mysql_select_db("user_information", $connect); //修改为您的数据库信息
    $words = "SELECT * FROM register WHERE username='$_POST[username]'"; //修改为您的数据库信息 //注意MySQL语句内要用单引号
    $rezult = mysql_query($words);
    $value = mysql_fetch_array($rezult);
    $name = $value['username'];
    $pass = $value['password'];
    if($name!==$_POST['username']){
        echo "用户不存在，请先注册！";
        echo '<meta http-equiv="Refresh" content="3; url=login.html"/>';
    }
    else{
        if($pass!==$_POST['password']){
            echo "密码错误！";
            echo '<meta http-equiv="Refresh" content="3; url=./login.html"/>';
            die; //关键！此句必须有
        }
        setcookie('username', $_POST['username'], time()+10086);
        setcookie('password', $_POST['password'], time()+10086);
        header("Location:./user.php");
    }
    
?>