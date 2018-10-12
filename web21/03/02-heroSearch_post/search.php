<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul{
            list-style:none;
            padding: 0;
            overflow: hidden;
        }
        li{
            width: 180px;
            height: 180px;
            padding-top: 10px;
            border-radius:10px;
            border: 1px solid #000;
            float: left;
            margin: 5px;
            transition: .5s;
        }
        li:hover{
            background-color: skyblue;
        }
        img{
            width: 150px;
            display: block;
            margin: 0 auto;
        }
        a{
            display: block;
            text-align:center;
        }
    </style>
</head>
<body>
    <h2>英雄搜索!!!!</h2>
    <form action="./search.php" method="POST">
        <input type="text" value="<?php echo $_POST['hero']?>" name="hero" placeholder="请输入你想要查询的名字!">
        <br>
        <input type="submit">
    </form>
    <ul>
        <?php
        //使用post方式提交的表单
        //1.接受表单传入的信息
        $hero=$_POST['hero'];

        //2.包含数据引入
        include "./data/data_heroList.php";
        //3.判断接受的信息与数组匹配
        if (!empty($hero)){
            //假设全部都没有
            $flag=true;
            //建立一个临时数组
            $tempArray=[];
            //循环遍历数组
            foreach ($heroList as $v){
                //判断数组值是否与传入匹配  strstr();
                if (strstr($v['name'],$hero)){
                    $tempArray[]=$v;
                    $flag=false;
                }
            }

            if ($flag){
                echo "<h1></h1>";
            };



            foreach ($tempArray as $v){



        ?>




            <li>
                <img src="<?php echo $v['icon'] ?>" alt="">
                <a href="#"><?php echo $v['name'] ?></a>
            </li>

    <?php
            }
        }
        ?>

    </ul>
    <a href="./index.html">返回搜索页哦O(∩_∩)O哈哈~</a>
</body>
</html>
<script>
    var hh=document.querySelector('h1');
    var sec=3;
    function arr() {
        sec--;
        hh.innerHTML="没有相关信息，倒计时"+sec+"秒";
        if(sec==0){
            location.href='./index.html';
        }
    }
  setInterval(arr,1000);



</script>
