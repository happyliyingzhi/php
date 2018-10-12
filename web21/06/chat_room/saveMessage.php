<?php
//接受表单的信息
$id=$_COOKIE['ids'];
$content=$_POST['content'];
$picture=$_FILES['picture'];

//图片名字重命名
$str=time().'.'.explode('.',$picture['name'])[1];
//图片的移动的位置
$fileName='./images/message/'.$str;
//将临时文件保存在指定的目录
$filestr=move_uploaded_file($picture['tmp_name'],$fileName);
//if ($filestr){
//    echo 'ok';
//}else{
//    echo 'no';
//}
//die;
//连接数据库
$link = mysqli_connect('127.0.0.1','root','root','itheima');
//var_dump($link);
//die;
//插入sql语句
$sql = "insert into chat_message set user_id= '{$id}',content='{$content}', picture='{$str}'";
//$sql = "insert into chat_message set user_id = '{$id}',content='{$content}',picture='{$str}'";
//执行sql语句
$res=mysqli_query($link,$sql);
//var_dump($res);
//die;
//判断
if ($res){
    header("location:index.php");
}
