<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/29
 * Time: 15:03
 */
//接受表单的信息
$id=$_POST['txt'];
$heroName=$_POST['heroName'];
$heroSkill=$_POST['heroSkill'];
$heroIcon=$_FILES['heroIcon'];
$arr=explode('.',$heroIcon['name']);
//获取下标为1的元素
$str=$arr[1];
//拼接字符串
$new_name = time().'.'.$str;

$fileName = './imgs/icon/'.$new_name;

$flag = move_uploaded_file($heroIcon['tmp_name'],$fileName);
if($flag){
    echo 'true';
}else{
    echo 'false';
}


//连接数据库
$link=mysqli_connect('127.0.0.1','root','root','mysql');
//修改SQL语句
$sql="update hero set heroName='{$heroName}',heroSkill='{$heroSkill}',heroIcon='{$fileName}' where id=".$id;
//执行sql语句
$date=mysqli_query($link,$sql);
//返回本页
if ($date){
    header("Location:index.php");
}