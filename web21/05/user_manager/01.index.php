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
    tr>td{
      vertical-align: initial!important;
    }
  </style>
</head>

<body>
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
        <a class="navbar-brand" href="#">人员管理后台</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">回收站</a>
          </li>
        </ul>

      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="container-fluid">

    <div class="page-title">
      <h1>首页</h1>
    </div>
      <form action="./dodel.php" method="get">
    <div class="page-action">
      <!-- show when multiple checked -->
      <div class="btn-batch" style="">
<!--        <button class="btn btn-info btn-sm">批量通过</button>-->
        <button class="btn btn-danger btn-sm" name="btn" >批量删除</button>
      </div>
        <?php
        //连接数据库
         $link=mysqli_connect('127.0.0.1','root','root','itheima');
//         var_dump($link);
//
//       //定义一个变量来表示显示那一页$_get['page],表示第几页
//        $page=isset($_GET['page'])?$_GET['page']:1;
//        //设置每页显示几条数据
//        $pageSize=3;
//        //设置每页显示的开始数据,索引值
//        $pageindex=($page-1)*$pageSize;
//        //构造查询sql语句
//        $sql="select * from cq limit {$pageindex},{$pageSize}";
//        //执行sql语句
//        $date= mysqli_query($link,$sql);
//
//        //从结果中取出数据
//        $res=mysqli_fetch_all($date,1);
//
//        //遍历数组，并渲染在页面上
        //定义一个变量显示第几页，$_get['page']
        $page=isset($_GET['page'])?$_GET['page']:1;
        //设置页面的显示的长度
        $pageSize=5;
        //设置页面开始的索引
        $pageindex=($page-1)*$pageSize;
        //查询sql语句
        $sql="select * from cq  where isDelete=1  limit {$pageindex},{$pageSize}";
        //执行sql语句
        $date=mysqli_query($link,$sql);
        //结果集取数据
        $res=mysqli_fetch_all($date,1);
        //查询sql语句
        $countsql='select * from cq';
      //执行sql语句
        $date=mysqli_query($link,$countsql);
        //从结果集中取出数据
        $total_count=count(mysqli_fetch_all($date));
      //  echo $total_count;
        //得到的共有多少页面，总记录数/$pageSize,然后取整
        $total_num=(int)ceil($total_count/$pageSize);
//        echo $total_num;



      ?>


      <ul class="pagination pagination-sm pull-right">
        <li>
          <a href="./01.index.php?page=<?php  echo ($page-1==0)? 1:($page-1)?>">上一页</a>
        </li>
          <?php
          //索引的开始的位置
          $start=$page-2;
          //索引结束的位置
          $end=$page+2;
          //控制最开始的位置
          if ($page<3){
              $start=1;
               $end=$start+4;
          }
          //控制结束的位置
          if ($page>$total_num-2){
              $start=$total_num-4;
              $end=$total_num;
          }
          for ($i=$start;$i<=$end;$i++){


          ?>
        <li class='<?php echo $_GET['page']==$i? 'active':'' ?>'>
          <a href="./01.index.php?page=<?php  echo $i;?> "><?php echo $i ?></a>
        </li>
          <?php } ?>
        <li>
          <a href="./01.index.php?page=<?php  echo ($page+1>=$total_num)? $total_num:($page+1) ?>">下一页</a>
        </li>

      </ul>
    </div>
    <table class="table  table-bordered ">
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

       foreach ($res as  $v){


      ?>



        <tr>
          <td class="text-center">
            <input type="checkbox" name="ids[]" value="<?php echo $v['id']?>">
          </td>
          <td><?php  echo $v['hero_name']; ?></td>
          <td>
            <img src=" ./images/icon/<?php  echo $v['hero_icon']; ?>" alt="">
          </td>
          <td><?php echo $v['hero_status'];?></td>
          <td class="text-center">
             <?php
               if ($v['hero_status']=='待审核'){

             ?>
            <a href="javascript:void(0)" class="btn btn-lg btn-info ">通过</a>
              <?php } ?>

            <a href="javascript:;" class="btn btn-lg btn-danger ">删除</a>
          </td>
        </tr>
      <?php  } ?>
<!--        <tr>-->
<!--          <td class="text-center">-->
<!--            <input type="checkbox">-->
<!--          </td>-->
<!--          <td>黄道军双胞胎</td>-->
<!--          <td>-->
<!--            <img src="./images/icon/黄道军双胞胎_icon.png" alt="">-->
<!--          </td>-->
<!--          <td>通过</td>-->
<!--          <td class="text-center">-->
<!--            <a href="javascript:;" class="btn btn-lg btn-danger ">删除</a>-->
<!--          </td>-->
<!--        </tr>-->
      
      </tbody>
    </table>
  </div>
  </form>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>
<script>
    $(function () {
     $('thead input[type=checkbox]').on('click',function () {
          var inputchecked= $(this).prop("checked");
         $('tbody input[type=checkbox]').prop("checked",inputchecked);
     })
        $('tbody input[type=checkbox]').on('click',function () {
                var $inputlength=$('tbody input[type=checkbox]').length;
                var $inputchecked=$('tbody input[type=checkbox]:checked').length;
//            console.log($inputchecked);
////            console.log($inputlength);
//            if($inputlength==$inputchecked){
//                $('thead input[type=checkbox]').prop("checked",true);
//            }else {
//                $('thead input[type=checkbox]').prop("checked",false);
//            }
            $('thead input[type=checkbox]').prop("checked",$inputchecked==$inputlength);
        })

    })
    
    
    
</script>