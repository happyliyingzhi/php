
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <!-- 让ie  使用 edge 来渲染页面 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 视口 可以根据需求 添加一些 选项 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="lib/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--  html5shiv  html5新语义标签 兼容性 -->
  <!--[if lt IE 9]>
        <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>

  </style>
</head>

<body class='bg-danger'>
<?php

//获取cookied值

////$cook2=$_COOKIE['logincookie'];
//if(isset($_COOKIE['logincookie']) && $_COOKIE['logincookie']=='yes') {
//    $cook1 = $_COOKIE['id'];
//
//    //连接数据库
//    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'itheima');
////查询sql语句
//    $sql = "select * from admin where id='{$cook1}'";
////执行sql语句
//    $date = mysqli_query($link, $sql);
////取出结果集
//    $res = mysqli_fetch_assoc($date);
//
//}else{
//    header("location:01.login.html");
//}
//
if (isset($_COOKIE['logincookies']) && $_COOKIE['logincookies']=='yes'){
    $id=$_COOKIE['id'];
    //连接数据库
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'itheima');
    //查询sql语句
    $sql="select * from admin where id='{$id}'";
    //执行sql语句
    $date=mysqli_query($link,$sql);
    //取出结果集
    $res=mysqli_fetch_assoc($date);
}else{
    header("location:01.login.html");
}


////接受表单传入的id
//$id=isset($_GET['id'])?$_GET['id']:1;
////连接数据库
//$link = mysqli_connect('127.0.0.1','root','root','itheima');
////查询sql语句
//$sql="select * from admin where id='{$id}'";
////执行sql语句
//$date=mysqli_query($link,$sql);
////取出结果集
//$res=mysqli_fetch_assoc($date);




?>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">个人主页--<span style="color:hotpink;font-size:14px;"><?php echo $res['user'] ?></span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./exit.php">退出</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="jumbotron container">
    <h1><?php echo $res['user'] ?></h1>
    <img src="<?php echo $res['icon'] ?>" alt="..." class="img-thumbnail">
    <p>
      待审核</p>
  </div>
</body>









</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>