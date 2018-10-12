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
    .input-group {
      margin: 20px 0;
    }

    .form-group {
      display: flex;
    }

    .form-group>* {
      flex: 1;
      margin: 10px;
    }

    a {
      text-decoration: none !important;
    }
    img{
      width: 150px !important ;
    }
  </style>
</head>

<body class='bg-success'>
  <div class="container">
    <h1>
      <a href="./index.html">人员管理</a>
      <small>--修改</small>
    </h1>
      <?php
      //获取表单传入的数据
      $id=$_GET['id'];
      //连接数据库
      $link=mysqli_connect('127.0.0.1','root','root','mysql');
      //查询sql语句
      $sql="select * from star where id=".$id;
      //执行sql语句
      $date=mysqli_query($link,$sql);
      //取出结果集
      $res=mysqli_fetch_all($date,1);
//     var_dump($res);
       foreach ($res  as  $v) {




      ?>





    <div class="jumbotron">
      <form action="./doupdate.php" method="post">;
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">
            <span class='glyphicon glyphicon-cutlery'></span>
          </span>
          <input type="text" name='userName' value="<?php  echo $v['name'] ?>" class="form-control" placeholder="你输入人员姓名" aria-describedby="basic-addon1" required>
          <input type="hidden" name="txt" value="<?php  echo $v['id'] ?>">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon2">
            <span class='glyphicon glyphicon-thumbs-up'></span>
          </span>
          <input type="text" name='userinfo' value="<?php  echo $v['info'] ?>" class="form-control" placeholder="请输入对其的描述" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">
            <span class='glyphicon glyphicon-picture'></span>
          </span>
          <input type="text" name='userIcon'  value="<?php  echo $v['image'] ?>" class="form-control" placeholder="请输入图片url" aria-describedby="" required>
        </div>
        <img class="preview img-thumbnail" src=""
          alt="">
        <div class="form-group">
          <button type="submit" class="btn btn-primary">保存</button>
          <a href='#' class="btn btn-danger">取消</a>
        </div>
          <?php }?>
      </form>
    </div>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>
<script>
  $(function () {
    $('[name=userIcon]').blur(function () {
      if($(this).val().trim()!=''){
        $('img.preview').attr('src', $(this).val());
      }
    })
  })
</script>