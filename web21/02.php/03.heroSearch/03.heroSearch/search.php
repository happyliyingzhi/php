<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            padding: 0;
            overflow: hidden;
        }

        li {
            width: 180px;
            height: 180px;
            padding-top: 10px;
            border-radius: 10px;
            border: 1px solid #000;
            float: left;
            margin: 5px;
            transition: .5s;
        }

        li:hover {
            background-color: skyblue;
        }

        img {
            width: 150px;
            display: block;
            margin: 0 auto;
        }

        a {
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
<ul>

   <?php

    //思路1.引入数组
    //2.接受表单传入的值hero
    //3.判断是否为空empty
    //4.创建一个新的空的数用来存相同数据的名称
    //5.  假设全部都没有flag 循环遍历，然后进行匹配，输入框与数组的进行匹配strstr（），如果有就将存入在新的数组里面，将flag改为false
    //6，假设都没有，输出计时器的
    //7.遍历循环新的数组，然后显示在页面上面
    //8.最后设置script计时器的代码
   //第一步：引入数据
  include "./data/data_heroList.php";
   //获取form表单的name的值
      $arr=$_GET['hero'];
      //判断是否为空,empty()是否为空，返回的是布尔值，有true，没有false
   if (!empty($arr)){
       //创建一个临时数组进行匹配
       $temp=array();
       //如果是开始假设是全部没有
       $flag=true;
       // 循环判断，判断输入框的值与数组里面的值是否匹配,strstr()，循环遍历每一个元素
       foreach ($heroList as $value) {
           if (strstr($value['name'], $arr)) {
               $temp[] = $value;
               $flag = false;
           }
       }
       //假设全部都没有输出h2，然后返回这个计时器回到html页面
       if ($flag){
           echo "<h2>请回到HTML，倒计时3秒</h2>";
       }
       //遍历循环新的数组
       foreach ($temp as $value) {

           ?>
           <li>
               <!--        输出数组元素里面的内容 -->
               <img src="<?php echo $value['icon']; ?>" alt="">
               <a href=""><?php echo $value['name']; ?></a>
           </li>

           <?php
       }
   }
   ?>

<script>
  var i=3;
  var hh=document.querySelector('h2');
  function go() {
      i--;
      hh.innerHTML="请回到HTML，倒计时"+i+"秒";
      if (i==0){
          location.href='index.html';
      }
  }
  setInterval(go,1000)


</script>

</body>
</html>
