<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        h2,
        h3 {
            margin: 0;
            text-align: center;
        }

        header {
            /* height: 40px; */
            padding: 20px;
            background-color: yellowgreen;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .container {
            padding: 10px;
        }

        .container li {
            width: 475px;
            height: 138px;
            /* border: 1px solid #000; */
            box-sizing: border-box;
            float: left;
        }

        .container a {
            display: block;
            position: relative;
            color: black;
            text-decoration: none;
        }

        .container .left {
            width: 215px;
            left: 0;
            position: absolute;
        }

        .container .right {
            padding-left: 215px;
        }

        .container .left img {
            display: block;
            width: 215px;
            height: 136px;
        }

        .container p {
            margin: 0;
            padding: 0;
            padding-left: 20px;
            font-size: 14px;
            display: block;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
        }

        .container p.title {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            margin-top: 0;
        }

        .container p.material {
            color: #9c6730;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            max-width: 100%;
            vertical-align: top;
        }

        .bold {
            font-weight: 700;
        }

        .green-font {
            color: #72a46d;
        }

        .gray-font {
            color: #909090;
        }

        .container p.stats {
            color: #909090;
            font-size: 13px;
        }
    </style>
</head>

<body>
<header>
    <h2>绿色食谱</h2>
</header>
<div class="container">
    <ul>
        <?php
          include './data/foodList.php';
          foreach ($foodList as  $value ){





        ?>


            <li>
                <a href="#">
                    <div class="left">
                        <img src="<?php echo $value['path']?>"
                             alt="">
                    </div>
                    <div class="right">
                        <p class="title"><?php echo $value['foodName'] ?></p>
                        <p class="material">
                            <?php echo $value['material']?>
                        </p>
                        <p class="stats">
                            <?php echo $value['stats']; ?>
                        </p>
                        <p class="author">
                                <span href="/cook/10694168/" class="gray-font">
                                 <?php echo $value['author'];?>
                            </span>
                        </p>
                    </div>
                </a>
            </li>

        <?php } ?>
    </ul>
</div>
</body>


</html>

