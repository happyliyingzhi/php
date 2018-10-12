<?php
/**
 * Created by PhpStorm.
 * User: 李英芝
 * Date: 2018/7/1
 * Time: 10:04
 */
header("Content-type:text/html;charset=utf-8");
//接受用户信息
$userName=$_POST['userName'];
$userPass=$_POST['userPass'];
$userIcon=$_FILES['userIcon'];
$lasttime=time();
//var_dump($userIcon);
//die;
//连接数据库
$link = mysqli_connect('127.0.0.1','root','root','itheima');
//var_dump($link);
//查询sql语句
$sql="select * from admin where user='{$userName}'";
//执行sql语句
$date=mysqli_query($link,$sql);
//取出结果集
$res=mysqli_fetch_all($date,1);
//判断
if (count($res)!=0){
    echo "您已经注册过了，<a href='02.register.html'>请重新注册</a>";
}else{
    //图片名字拼接
    $file_name=time().'.'.explode('.',$userIcon['name'])[1];
//    var_dump($file_name);
//    die;
    //图片位置
    $filestatus='./images/icon/'.$file_name;
    //图片移动的保存的位置
     $flag= move_uploaded_file($userIcon['tmp_name'],$filestatus);


    //查询sql语句
//    $spll="insert into admin set user='{$userName}',password='{$userPass}',icon='{$filestatus}'";
    $sqll="insert into admin set user='{$userName}',password='{$userPass}',icon='{$filestatus}',lasttime='{$lasttime}'";
    //执行sql语句
    $date1=mysqli_query($link,$sqll);
//    var_dump($date);
//    die;
//查询sql语句

    if ($date1){
        header("location:01.login.html");
    }
}











////$user=$_POST['userName'];
//////var_dump($user);
//////die;
//$password=$_POST['userPass'];
////$icon=$_FILES['userIcon'];
//$icon = $_FILES['userIcon'];
//$lasttime=time();
//////var_dump($icon);
//////die;
//////数组取图片的后缀
//////$new_name=explode('.',$icon['name'])[1];
////////重新命名
//////$str=time().'.'.$new_name;
////////图片的位置
//////$file_statue="./images/icon/".$str;
////////移动图片的位置
//////$move=move_uploaded_file($icon['tmp_name'],$file_statue);
//////if ($move){
//////    echo 'true';
//////}else{
//////    echo 'false';
//////}
//////接受数据库
//$link = mysqli_connect('127.0.0.1','root','root','itheima');
////查询sql语句
//$sql="select * from admin where user='{$user}'";
////执行sql语句
//$date=mysqli_query($link,$sql);
////取出结果集
//$res=mysqli_fetch_all($date,1);
////判断
//if (count($res)!=0){
//    echo "您已经注册过，<a href='02.register.html'>请重新登入</a>";
//}else{
//    //图片重命名
//     $new_name = time().'.'.explode('.',$icon['name'])[1];
//     //图片移动的文件位置
//    $filename='./images/icon/'.$new_name;
//    //移动临时文件夹
//    move_uploaded_file($icon['tmp_name'],$filename);
////    //先将图片进行移动
////    $new_name = time().'.'.explode('.',$image['name'])[1];
////    $icon = './images/icon/'.$new_name;
////    $flag= move_uploaded_file($image['tmp_name'],$icon);
//     //sql语句
//    $sqll="insert into admin set user='{$user}',password='{$password}',icon='{$filename}',lasttime='{$lasttime}'";
//    //执行sqll语句
//    $datte=mysqli_query($link,$sqll);
//    if ($datte){
//        header("location:01.login.html");
//    }
//
//}

////1.接收用户提交过来的数据
//$user = $_POST['userName'];
//$pass = $_POST['userPass'];
//$image = $_FILES['userIcon'];
//
//$lasttime = time(); //获取当前的时间戳
////2.连接数据库
//$link = mysqli_connect('127.0.0.1','root','root','itheima');
////3.判断用户名是否被注册过  查询表里面是否有这个用户名
//$sql = "select * from admin WHERE user = '{$user}'";
////4.执行sql
//$res = mysqli_query($link,$sql);
////5.从结果集中取出数据
//$data = mysqli_fetch_all($res,1);
//
////6.判断数组的长度  如果表里面有有数据 就表示用户已经注册
////先将这个数据查询出来 如果有 会得到一个数组
////如果没有注册 就是一个空数组  的长度就为0
//if(count($data) != 0){
//    //如果有
//    echo "伙计，该用户名已经被注册了<a href='02.register.html'>请重新注册</a>";
//}else{
//    //表示没有注册过  将数据写入到数据表中
//    //先将图片进行移动
//    $new_name = time().'.'.explode('.',$image['name'])[1];
//    $icon = './images/icon/'.$new_name;
//    move_uploaded_file($image['tmp_name'],$icon);
//    //将数据写入表中 admin
//    $sql = "insert into admin set user='{$user}',password = '{$pass}',icon = '{$icon}',lasttime='{$lasttime}'";
//    //执行sql
//    $res = mysqli_query($link,$sql);
//    if($res){
//        header("location:01.login.html");
//    }
//}

////关闭连接
//mysqli_close($link);