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
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      border: 1px solid rgba(0, 0, 0, 0);
    }

    .page-header {
      margin-top: 20px;
    }

    h1 {
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .container-fluid {
      width: 100%;
      flex: 1;
    }

    .row {
      height: 100%;
    }

    .col-xs-8 {
      height: 100%;
    }

    .bg-success {
      height: 80%;
      overflow-y: scroll;
      padding-top: 10px;
    }

    .text-muted {
      font-size: 12px;
    }
    .media-object{
      width: 80px !important;
      height: 80px !important;
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
    .media-body img{
      max-width:500px;
    }
  </style>
</head>

<body class='bg-warning'>
  <div class="page-header">
    <h1>评论</h1>
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
          //session开始
          session_start();
          if (isset($_SESSION['login']) && $_SESSION['login']==1) {

              include "header.php";
              //接受表单传入的信息
              $id = $_GET['id'];
              //连接数据库
              $link = mysqli_connect('127.0.0.1', 'root', 'root', 'm');
              //构建sql语句
              $sql = "select * from minfo WHERE id='{$id}'";
              //执行sql语句
              $date = mysqli_query($link, $sql);
              //取出结果集
              $res = mysqli_fetch_all($date, 1);
          }else{
              header("location:login.html");
          }
          ?>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
  <div class="container-fluid">
    <div class="row">
        <?php
        foreach ($res as $v){

        ?>
      <div class="col-xs-4">
        <div class="jumbotron">
          <h3><?php  echo $v['m_title']?></h3>
          <p>评分: <span class="text-danger"><?php  echo $v['m_score']?></span></p>
          <img class='img-thumbnail' src="<?php  echo $v['m_img']?>" alt="...">
        </div>
      </div>
        <?php } ?>
      <div class="col-xs-8 info">
        <div class="container-fluid bg-success">
          <!-- 聊天内容 -->
            <?php
//            $sql = "select user_name,user_icon,review_content,review_img from muser AS u LEFT JOIN mreview AS r on u.id = r.user_id where r.m_id=".$id;
//
//            //4.执行sql
//            $res = mysqli_query($link,$sql);
//
//            //从结果集中取出数据
//            $data = mysqli_fetch_all($res,1);
//
//            foreach($data as $v){
//             //构建sql语句
            $sql="select user_name,user_icon,review_content,review_img from muser as u LEFT JOIN mreview as r on u.id=r.user_id WHERE r.m_id='{$id}'";
//            $sql = "select user_name,user_icon,review_content,review_img from muser AS u LEFT JOIN mreview AS r on u.id = r.user_id where r.m_id=".$id;
            //构建sql语句
            $res=mysqli_query($link,$sql);
            //取出结果集
            $date=mysqli_fetch_all($res,1);
            foreach ($date as $v){

            ?>


          <div class="media">
            <div class="media-left">

              <a href="#">
                    <img class="media-object" src="img/<?php echo $v['user_icon']; ?>" alt="...">
                  </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $v['user_name']; ?></h4>
              <p>
                  <?php echo $v['review_content']; ?>
              </p>
                <p>
                    <img src="img/<?php echo $v['review_img']; ?>" />
                </p>
            </div>
          </div>
            <?php } ?>
        </div>
        <form action="./savemessage.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <input style="width:95%;" type="text" class="form-control" placeholder="Search for..."name="content">
            <input type="hidden" name="m_id" value="<?php echo $id; ?>">
            <span style="position: absolute;font-size:30px;" class="my-icon glyphicon glyphicon-picture"></span>
            <input style="width:5%;opacity: 0;" type="file" name="img" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                   <button class="btn btn-danger">发表评论</button>
          </span>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>