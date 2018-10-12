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
    body {
      padding-top: 10px;
    }

    img {
      width: 242px;
      height: 242px !important;
    }

    h2 {
      text-align: center;
      margin: 10px;
    }
  </style>
</head>

<body class='bg-success'>

    <!-- 搜索区域
      form表单的action 可以省略不写 
      不写 就是 自己


      表单元素的 required 属性
        非空验证
      required
    -->
    <form action="./search.php" method="get">
      <input value="<?php echo $_GET['hero']?>" required type="text" name="hero" placeholder="请输入英雄的名字">
      <br>
      <input type="submit">
    </form>

  <div class="container">
    <div class="panel panel-default ">
      <div class="panel-heading">
        <h1>LOL英雄-------
          <small>列表页-php</small>
        </h1>
      </div>
      <div class="panel-body">
        <div class="row">
            <?php
            //包含数据
            include "./data/data_lol_list.php";

            //接受表单的信息
            $hreo=$_GET['hero'];
          //判断接受的信息
           if (!empty($hreo)){
               //假设全部为没有
               $flag=true;
               $temp=[];
               foreach ($heroArr as $v){
                   if (strstr($v['champion_name'],$hreo)){
                       $temp[]=$v;
                       $flag=false;
                   }
               }
                       var_dump($temp);
           }
            foreach ($temp as $v){



            ?>


          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="">
                <img src="<?php  echo $v['champion_icon']?>" alt="...">
              </a>
              <div class="caption">
                <h2><?php  echo $v['champion_name']?></h2>
              </div>
            </div>
          </div>
<?php } ?>


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