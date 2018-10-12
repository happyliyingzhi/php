<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/7/2
 * Time: 14:44
 */
//接受表单的信息
$ids=$_GET['ids'];
//var_dump($ids);
//die;
//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','itheima');
//更新sql语句
$sql="update chat_user set userStatus='通过' where id=".$ids;
//执行sql语句
$date=mysqli_query($link,$sql);
//返回页面
if ($date){
    header("location:index.php");
}