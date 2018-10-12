<?php
//判断用户的行为
if (isset($_POST['reg']) && $_POST['reg']=='1'){
   //获取表单的信息
    $user=trim($_POST['user']);
    $password=trim($_POST['password']);
    $files=$_FILES['file'];
    //连接数据库
    $link=mysqli_connect('127.0.0.1','root','root',m);
//    var_dump($link);
    //构建sql语句
    $sql="select * from muser where user_name='{$user}'";
    //执行sql语句
    $date=mysqli_query($link,$sql);
    //取出结果集
    $res=mysqli_fetch_assoc($date);
//    var_dump($res);
    if ($res){
               echo "您已经注册过，<a href='register.html'>请重新登入</a>";

    }else{
        //图片重命名
        $file_name=time().'.'.explode('.',$files['name'])[1];
//        var_dump($file_name);
        //图片的位置
        $file_sta='./img/'.$file_name;
        //移动图片
        $flag= move_uploaded_file($files['tmp_name'],$file_sta);
//        if ($flag){
//            echo 'ok';
//        } else{
//            echo 'no';
//        }
        //构建sql语句
        $sql="insert into muser SET user_name='{$user}',user_pass='{$password}',user_icon='$file_name'";
        //执行sql语句
        $date=mysqli_query($link,$sql);
        header("location:login.html");
    }
}else{
    header("location:register.html");
}