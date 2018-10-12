<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/6/27
 * Time: 15:31
 */
header("Content-type:text/html;charset=utf-8");
//连接
$link = mysqli_connect("127.0.0.1",'root','root','mysql','3306');
//var_dump($link);

//查询
//$sql = 'select *from userinfo where id=2';
//$res = mysqli_query($link,$sql);
//$data = mysqli_fetch_assoc($res);
//echo '<pre>';
//print_r($data);

//增加
//$sql="insert into userinfo set username='依依',age=30,sex=1";
//$res=mysqli_query($link,$sql);
//if ($res){
//    echo 'true';
//}else{
//    echo 'false';
//}
//修改
$sql="update userinfo set sex=2 WHERE id=6";
$res=mysqli_query($link,$sql);
if ($res){
    echo 'true';
}else{
    echo 'false';
}