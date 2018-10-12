<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="lib/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <style>
      .page-header{
      margin-top: 20px;
    }
    h1{
      margin: 0;
    }
    .navbar-right li:first-child a{
      padding: 0 !important;
    }
    .navbar-right img{
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }
  </style>
</head>
<?php
session_start();
?>
<body class='bg-warning'>
  <div class="page-header">
    <h1>首页</h1>
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
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
          <?php

          include "header.php";
          ?>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
  <div class="container-fluid">
      <?php
      //判断用户是否从这个页面过来的
      //开启session的

          //连接数据库
          $link=mysqli_connect('127.0.0.1','root','root','m');
          //构建sql语句
          $sql="select * from minfo ";
          //执行sql语句
          $date=mysqli_query($link,$sql);
          //取出结果集
          $res=mysqli_fetch_all($date,1);
//                var_dump($res);





      ?>
    <div class="row">
        <?php
            foreach ($res as $v){


        ?>
      <div class="col-xs-4">
          <div class="jumbotron">
              <h3><?php  echo $v['m_title']?></h3>
              <p>评分: <span class="text-danger"><?php  echo $v['m_score']?></span></p>
              <p>关键字: <span class="text-info"><?php  echo $v['m_tags']?></span></p>
              <a href="<?php  echo $v['m_url']?>"><img class='img-thumbnail' src="<?php  echo $v['m_img']?>" style="width:300px;height:440px;"  alt="..." ></a>
              <?php
                if (isset($_SESSION['login']) && $_SESSION['login']==1){
              ?>
              <p><a class="btn btn-primary btn-lg" href="discuss.php?id=<?php  echo $v['id']?>" role="button">查看评论</a></p>
              <?php  } ?>
            </div>
      </div>
        <?php  } ?>
    </div>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>