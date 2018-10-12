<?php
session_start(); //开启session
header("Content-type:text/html;charset=utf-8");


//判断用户的行为
if(isset($_POST['m_id'])){
$content=$_POST['content'];
$id=$_SESSION['res']['id'];
$file=$_FILES['img'];
$idinfo=$_POST['m_id'];

//图片重命名
    $filename=time().'.'.explode('.',$file['name'])[1];
//    var_dump($filename);
    //图片存放的地址
    $filesta='./img/'.$filename;
    //将临时文件传入永存的地址
   $res= move_uploaded_file($file['tmp_name'],$filesta);
//
//   if ($res){
//       echo 'ok';
//   }else{
//       echo "no";
//   }
//连接数据库
    $link = mysqli_connect("127.0.0.1","root","root","m");
    //构建sql语句
    $sql="insert into mreview set review_content='{$content}',user_id='{$id}',review_img='{$filename}',m_id='{$idinfo}'";
    //执行sql语句
    $res1=mysqli_query($link,$sql);
    //返回本页面
    $url =  $_SERVER['HTTP_REFERER'];
   if ($res1){
       header("location:$url");
   }





//    $mid = $_POST['m_id'];
//    $content = $_POST['content'];
//    $img = $_FILES['img'];
//    $user_id = $_SESSION['res']['id'];
//
//
//    //将图片进行重命名
//    $icon_name = time().'.'.explode('.',$img['name'])[1];
//    //移动图片
//    move_uploaded_file($img['tmp_name'],'./img/'.$icon_name);
//
//    //1.连接数据库
//    $link = mysqli_connect("127.0.0.1","root","root","m");
//
//    //如果没有 就写入到数据库
//    $sql = "insert into mreview(review_content,m_id,user_id,review_img) values('{$content}','{$mid}','{$user_id}','{$icon_name}')";
//
//    //die;
//    //执行sql
//    $res = mysqli_query($link,$sql);
//
//
//    //在PHP中有一个预定义变量叫$_SERVER  HTTP_REFERER获取当前面上一次访问的URL地址
//    $url =  $_SERVER['HTTP_REFERER'];
//
//    if($res){
//        header("location:{$url}");
//    }

}