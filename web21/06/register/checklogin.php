<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/7/1
 * Time: 10:36
 */
//echo "ok";
//接受表单传入的信息
$user=$_POST['userName'];
$password=$_POST['userPass'];
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','itheima');
//var_dump($link);
//查询sql语句
$sql="select * from admin where user='{$user}' and password='{$password}'";
//执行sql语句
$date=mysqli_query($link,$sql);
//取出结果集
$res=mysqli_fetch_assoc($date);
//var_dump($res);
//die;
//判断
if ($res){
//    echo 'true';
//    setcookie('logincookie','yes');
//    setcookie('id',$res['id']);
    setcookie('logincookies','yes');
    setcookie('id',$res['id']);
    header("location:03.userIndex.php");
}else{
    header("location:01.login.html");
//    echo 'false';
}