<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/7/1
 * Time: 16:21
 */
//接受表单的信息
$userName=$_POST['userName'];
$password=$_POST['password'];
//var_dump($userName);
//连接数据库
$link = mysqli_connect('127.0.0.1','root','root','itheima');
//查询sql语句
$sql="select * from chat_user where userName='{$userName}' and userPass='{$password}'";
//执行sql语句
$date=mysqli_query($link,$sql);
//取出结果集,这里是一条数据用mysqli_fetch_assoc()是一维数组；
$res=mysqli_fetch_assoc($date);
//$res=mysqli_fetch_all($date,1);
//var_dump($res['id']);
//die;
//判断
if (count($res)!=0){
    setcookie("cookielogin",'yes');
    setcookie("ids",$res['id']);
    header("location:04.userIndex.php");
}else{
    header("location:02.login.html");
}

