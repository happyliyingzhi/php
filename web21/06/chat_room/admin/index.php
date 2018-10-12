<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="../lib/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <style>
    form {
      display: inline-block;
    }

    .pagination {
      margin: 0;
    }

    .page-action {
      margin: 10px 0;
    }

    .navbar-brand img {
      max-width: 100%;
      max-height: 100%;
      border-radius: 50%;
    }

    ul.nav li img {
      width: 40px;
      margin: 5px;
      height: 40px;
      border-radius: 50%;
    }

    .img-a {
      padding: 0 !important;
    }

    .btn-batch {
      display: inline-block;
      margin: 10px;
    }

    .page-title {
      padding-bottom: 20px;
    }

    td {
      /* vertical-align:middle; */
      line-height: 90px !important;
      font-size: 30px;
    }

    th {
      font-size: 30px;
    }
  </style>
</head>

<form action="allpass.php" >
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
        <a class="navbar-brand" href="#">人员管理</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
        <?php
        //判断是否从登入页面过来的
        if (isset($_COOKIE['cookeislogin']) && $_COOKIE['cookeislogin']=='yes'){
            $id=$_COOKIE['id'];
            //连接数据库
            $link = mysqli_connect('127.0.0.1','root','root','itheima');
            //查询sql语句
            $sql="select * from chat_user where id='{$id}'";
            //执行sql语句
            $res=mysqli_query($link,$sql);
            //取出结果集
            $date=mysqli_fetch_assoc($res);


        }else{
            header("location:02.login.html");
        }


        //$cookeislogin=$_COOKIE['cookeislogin'];

//        var_dump($id);
        ?>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class='img-a' href="#"><?php echo $date['userName']?>
              <img src="../images/icon/<?php echo $date['userIcon']?>" alt="">
            </a>
          </li>
          <li>
            <a href="exit.php">退出</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <div class="container-fluid">

    <div class="page-title">
      <h1>人员信息</h1>
    </div>
    <div class="page-action">
      <div class="btn-batch" style="">

        <button    class="btn btn-info btn-sm">批量通过</button>

        <button class="btn btn-danger btn-sm">批量删除</button>
      </div>
      <ul class="pagination pagination-sm pull-right">
        <li>
          <a href="#">上一页</a>
        </li>
        <li class='active'>
          <a href="#">1</a>
        </li>
        <li>
          <a href="#">2</a>
        </li>
        <li>
          <a href="#">3</a>
        </li>
        <li>
          <a href="#">下一页</a>
        </li>
      </ul>
    </div>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th class="text-center" width="40">
            <input type="checkbox">
          </th>
          <th width='25%'>名字</th>
          <th width='25%'>头像</th>
          <th width='25%'>状态</th>
          <th width='25%' class="text-center" width="100">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php
      //查询SQL语句将admin=no查询出来
      $sql="select * from chat_user where isAdmin='no'";
      //执行sql语句
      $date=mysqli_query($link,$sql);
      //取出结果集
      $res=mysqli_fetch_all($date,1);
      //循环遍历数组
      foreach ($res as $v){

      ?>
        <tr>
          <td class="text-center">
            <input type="checkbox" name="dis[]" value="<?php echo $v['id'] ?>">
          </td>
          <td><?php echo $v['userName']?></td>
          <td>
            <img src="../images/icon/<?php  echo $v['userIcon']?>" alt="">
          </td>
          <td><?php  echo $v['userStatus']?></td>
          <td class="text-center">
            <?php
                 if ($v['userStatus']=='待审核'){
            ?>

            <a href="pass.php?ids=<?php  echo $v['id']?>" class="btn btn-lg btn-info ">通过</a>
              <?php  }?>
            <a href="dodel.php?id=<?php  echo $v['id']?>" class="btn btn-lg btn-danger ">删除</a>
          </td>
        </tr>
      <?php

      }
      ?>
<!--        <tr>-->
<!--          <td class="text-center">-->
<!--            <input type="checkbox">-->
<!--          </td>-->
<!--          <td>黄道军双胞胎</td>-->
<!--          <td>-->
<!--            <img src="../images/icon/黄道军双胞胎_icon.png" alt="">-->
<!--          </td>-->
<!--          <td>通过</td>-->
<!--          <td class="text-center">-->
<!--            <a href="javascript:;" class="btn btn-lg btn-danger ">删除</a>-->
<!--          </td>-->
<!--        </tr>-->

      </tbody>
    </table>
</form>
  </div>

</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../lib/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('thead input[type=checkbox]').on('click',function () {
            var $headcheck= $(this).prop("checked");
//            console.log($headcheck);
            $('tbody input[type=checkbox]').prop("checked",$headcheck);


        });
        $('tbody input[type=checkbox]').on('click',function () {
            var $inputlength=$('tbody input[type=checkbox]').length;
//            console.log($inputlength);
            var $inputchecked=$('tbody input[type=checkbox]:checked').length;
//            console.log($inputchecked);
            if ($inputlength==$inputchecked){
                $('thead input[type=checkbox]').prop("checked",true);
            }else {
                $('thead input[type=checkbox]').prop("checked",false);
            }
        })


    })



</script>