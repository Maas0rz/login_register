<?php

    header ("Content-Type:text/html; charset=UTF-8");

    if($_POST['username']=="admin"){
        setcookie('username', $_POST['username'], time()+10086);
        setcookie('password', $_POST['password'], time()+10086);
        header("Location:admin.php");
        die;
    }
    $dir = opendir("./account");
    $username_md5_file = md5($_POST['username']).".txt";
    $flag = 0;
    while(($filename=readdir($dir))!=false){
        if($filename==$username_md5_file){
            $flag = 1;
            break;
        }
    }
    closedir($dir);
    if(!$flag){
        echo "用户不存在，请先注册！";
        echo '<meta http-equiv="Refresh" content="2;url=./login.html"/>';
    }
    else{
        setcookie('username', $_POST['username'], time()+10086);
        setcookie('password', $_POST['password'], time()+10086);
        header("Location:./user.php");
    }
    
?>