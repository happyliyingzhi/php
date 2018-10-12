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
      <form action="doAllDel.php" method="post">
    <div class="page-action">
      <!-- show when multiple checked -->
      <div class="btn-batch" style="">

        <button class="btn btn-danger btn-sm">批量删除</button>
      </div>

<?php
//1.连接数据库
$link=mysqli_connect('127.0.0.1','root','root','itheima');
//var_dump($link);
//设置一个page的变量,获取他

//var_dump($page);
//设置开始索引
$start=isset($_GET['page'])?$_GET['page']:1;
//var_dump($start);
//设置索引的长度
$pagesize=5;
//设置索引的开始变量的索引值
$pagestart=($start-1)*$pagesize;

//查询sql语句
$sql="select * from cq where isDelete=1 limit {$pagestart},{$pagesize}";
//执行sql语句
 $date=mysqli_query($link,$sql);
//结果集取出来
$res=mysqli_fetch_all($date,1);
//遍历数组，渲染在页面上
//分页，首先查询他的总共多少页,
 $totile="select * from cq";
 //执行sql语句
$totile_sql=mysqli_query($link,$totile);
//取出结果集
$totile_num=count(mysqli_fetch_all($totile_sql,1));
//取出的结果是数组，
//var_dump($totile_num);
//显示上面的页面的总数
$pagecount=$totile_num/$pagesize;
//var_dump($pagecount);
//得到的是float数，转换成整数
$pagenum=(int)ceil($pagecount);
//var_dump($pagenum);
//die;
//设置上面的页面只有5g个
//设置页面最开始的数值
//  $respage=$_GET['page'];
$page_start=$start-2;
$page_end=$start+2;
if ($start<3){
    $page_start=1;
    $page_end=$page_start+4;
}
if ($start>$pagenum-2){
    $page_start=$pagenum-4;
    $page_end=$pagenum;
}
?>

      <ul class="pagination pagination-sm pull-right">
        <li>
          <a href="01-index.php?page=<?php echo ($start-1<=1)? 1:($start-1)?>">上一页</a>
        </li>
        <?php
        //遍历循环数组，bug等于才会有五条数据显示上面
         for($i=$page_start;$i<=$page_end;$i++){
        ?>
        <li class="<?php  echo $start==$i?'active':''?>">
          <a href="01-index.php?page=<?php  echo $i  ?>"><?php echo $i ?></a>
        </li>
          <?php  } ?>
        <li>
          <a href="01-index.php?page=<?php  echo ($start+1>=$pagenum-2)?($pagenum-2):($start+1) ?> ">下一页</a>
        </li>
      </ul>
    </div>
    <table class="table  table-bordered ">
      <thead>
        <tr>
          <th class="text-center" width="40">
            <input type="checkbox" >
          </th>
          <th width='25%'>名字</th>
          <th width='25%'>头像</th>
          <th width='25%'>状态</th>
          <th width='25%' class="text-center" width="100">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php
            foreach ($res as $v){

      ?>
      <tr>
          <td class="text-center">
<!--              这的多选框，传到后台数据，是要加name的值后面加[]表示传过去的是数组-->
              <input type="checkbox" name="ids[]" value="<?php  echo $v['id']?>">
          </td>
          <td><?php echo $v['hero_name']?></td>
          <td>
<!--              反斜线 bug 和空格-->
              <img src=" ./images/icon/<?php  echo $v['hero_icon']?>" alt="">
          </td>
          <td><?php  echo $v['hero_status']?></td>

          <td class="text-center">

                  <a href="javascript:void(0)" class="btn btn-lg btn-info ">通过</a>

              <a href="javascript:;" class="btn btn-lg btn-danger ">删除</a>
          </td>
      </tr>
            <?php } ?>
      
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
    $(function(){
        $('thead input[type=checkbox]').on('click',function () {
               var $checkedbox= $(this).prop("checked");
//            console.log($checkedbox);
            $('tbody input[type=checkbox]').prop("checked",$checkedbox);
        })

        $('tbody input[type=checkbox]').on('click',function () {
            var $inputLength=$('tbody input[type=checkbox]').length;
//            console.log($inputchecked);
            var $inputChecked=$('tbody input[type=checkbox]:checked').length;
//            console.log($inputChecked);
            $('thead input[type=checkbox]').prop("checked",$inputChecked==$inputLength)
        })




//        //获取 上面的checkbox元素
//        $("thead input[type='checkbox']").click(function(){
//            //获取其checked属性
//          var $checked =  $(this).prop('checked');
//          //将$checked这个属性的值赋值给下面的checkbox元素
//            $("tbody input[type='checkbox']").prop('checked',$checked);
//        });
//
//        //获取下面的checkbox元素
//        $("tbody input[type='checkbox']").click(function(){
//            //获取下面的checkbox元素的个数
//            var $checkLength = $("tbody input[type='checkbox']").length;
//            //获取下面的checkbox元素的个数
//            var $checkedLength = $("tbody input[type='checkbox']:checked").length;
//            //判断总个数是否等于选中的个数
//            /*if($checkedLength == $checkLength){
//                $("thead input[type='checkbox']").prop('checked',true);
//            }else{
//                $("thead input[type='checkbox']").prop('checked',false);
//            }*/
//            $("thead input[type='checkbox']").prop('checked',$checkedLength == $checkLength);
//        });



    });
</script>