<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul{
            padding: 0;
            list-style:none;
        }
        li{
            float: left;
            width: 180px;
            padding-top: 20px;
            height: 180px;
            border: 1px solid #000;
            border-radius:20px;
            margin: 5px;
        }
        img{
            width: 150px;
            margin: 0 auto;
            display:block;
            border-radius:10px;
        }
        a{
            width: 100%;
            display:block;
            text-align:center;
            text-decoration: none;
            color:gray;
        }
        li:hover{
            background-color: yellowgreen;
        }
    </style>
</head>
<body>
    <ul>
        <?php
        //包含指定的数据文件
//        include "./data/data_heroList.php";
//
//        //遍历数组  模板标签
//        foreach ($heroList as $v){
//
//        ?>
<!---->
        <li>
            <img src="<?php echo $v['icon']; ?>" alt="">
            <a href="#"><?php echo $v['name']; ?></a>
        </li>
<!--       --><?php //} ?>
    </ul>
</body>
</html>