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
  <!--[if lt IE 9]>
        <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
  </style>
</head>

<body class='bg-danger'>



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
          <?php
          //接受表单信息
          if (isset($_COOKIE['cookielogin']) && $_COOKIE['cookielogin']=='yes'){
                 //获取id值
              $id=$_COOKIE['ids'];
//              var_dump($id);
//              die;
                //连接数据库
              $link = mysqli_connect('127.0.0.1','root','root','itheima');
//              var_dump($link);
//              die;
           //查询sql
              $sql="select * from chat_user where id='{$id}'";
              //执行sql语句
              $date=mysqli_query($link,$sql);
              //取出结果集
//              $res=mysqli_fetch_all($date,1);
               $res=mysqli_fetch_assoc($date);

          }else{
//               header("location:02.login.html");
           }


          ?>


        <a class="navbar-brand" href="#">个人主页--
          <span style="color:hotpink;font-size:14px;"><?php echo $res['userName']?></span>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="exit.php">退出</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="jumbotron container">
    <h1><?php echo $res['userName']?></h1>
    <img src="images/icon/<?php  echo $res['userIcon']?>" alt="..." class="img-thumbnail">
    <p class="text-danger">
    <?php  echo $res['userStatus']?></p>
           <?php
             if ($res['userStatus']=='通过'){
           ?>
    <p>
      <a href="./index.php">去聊天室</a>
    </p>
      <?php } ?>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>