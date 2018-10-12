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
    <ul>
        <!-- 
            接收数据
        查询 搜索
            从完整的数据中 搜索
            包含 多的数据
            找到之后 保存到一个临时数组
        保存了结果的数组
        根据结果 生成页面结构
        返回给浏览器(用户)

         -->
        <?php
        //数据传入
        include "./data/data_heroList.php";
        //接受数据
        $date=$_GET['hero'];
         //判断传入数据
        if (!empty($date)){
           //假设全部都没有匹配
            $flag=true;
        //创建一个数组，进行匹配存贮
            $temparray=[];
            //循环遍历进行匹配
            foreach ($heroList as $v){

            //    将输入框传来的值与数组里面进行条件匹配strstr()返回的是从匹配到的字开始到剩余后面的文字都显示

                if (strstr($v['name'],$date)){
               //    echo  strstr($v['name'],$date);
                        $temparray[]=$v;
//                      var_dump($temparray);
                        $flag=false;
                }
            }

            //如果没有就返回页面上
            if ($flag){
                echo "<h2>请返回到页面，倒计时3秒</h2>";
            }
            //如果有就显示在页面上
        foreach ($temparray as $v){

        ?>
            <li>
                <!--        输出数组元素里面的内容 -->
                <img src="<?php echo $v['icon']; ?>" alt="">
                <a href=""><?php echo $v['name']; ?></a>
            </li>

        <?php
            }
        }
        ?>
        <script>
            var hh=document.querySelector('h2');
            var sec=3;
            function getsec() {
                sec--;
                hh.innerHTML="请返回到页面，倒计时"+sec+"秒";
                if (sec==0){
                    location.href='index.html';
                }
            }

            setInterval(getsec,1000)



        </script>



    </ul>
    <a href="./index.html">返回搜索页哦O(∩_∩)O哈哈~</a>
</body>
</html>
