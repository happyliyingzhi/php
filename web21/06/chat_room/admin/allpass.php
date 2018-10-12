<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/7/2
 * Time: 16:58
 */
//获取ids，输入框的内容
$ids=$_GET['dis'];
//传过来的是数组，拼接成字符串
$str=join(',',$ids);
//var_dump($str);
//die;
//连接数据
$link=mysqli_connect('127.0.0.1','root','root','itheima');
//执行sal语句
$sql="update chat_user set userStatus='通过' where id in ({$str})";
//执行sql语句
$date=mysqli_query($link,$sql);
//返回
if ($date){
    header("location:index.php");
}