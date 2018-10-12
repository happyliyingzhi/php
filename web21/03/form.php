<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/27
 * Time: 16:03
 */
header("Content-type:text/html;charset=utf-8");
//var_dump($link);
//if (isset($_POST['sysid'])&& $_POST['sysid']=='web'){
//    $user=trim($_POST['user']);
//    $pwd=trim($_POST['pwd']);
//    //加密
//    $pwd=md5($pwd);
////    echo $user;
//    //连接数据库
//    $link = mysqli_connect("127.0.0.1",'root','root','mysql','3306');
////构建sql语句
//    $sql="insert into form set user='{$user}',password='{$pwd}'";
//    //执行$sql
//    $res=mysqli_query($link,$sql);
//    //4判断是否成功
//    if ($res){
//        echo 'true';
//    }else{
//        echo 'false';
//    }
//
//}
//思路：1.判断用户是否从html这个页面传过来
     //2.获取表单的用户输入的信息
//3.连接数据库
//4.构建sql语句
//5.执行sql
//6，判断是否成功
if (isset($_POST['user'])&$_POST['sysid']=='web'){
//    echo 'ok';
    $user=trim($_POST['user']);
    $pwd=trim($_POST['pwd']);
//    echo $user,$pwd;
    $pwd=md5($pwd);
    //连接数据库
    $link=mysqli_connect("127.0.0.1",'root','root','mysql','3306');
    //构建sql语句
    $sql="insert into form set user='{$user}',password='{$pwd}'";
    //执行sql语句
    $res=mysqli_query($link,$sql);
    //执行是否成功
    if ($res){
        echo 'true';
    }else{
        echo 'false';
    }

}