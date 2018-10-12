<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>网站</title>
  <style type="text/css">
    html,
    body,
    div,
    ul,
    img {
      padding: 0;
      margin: 0;
    }

    header {
      background: lightgreen;
      height: 50px;
      text-align: center;
      line-height: 50px;
      font: bold 24px/50px Arial;
    }

    nav {
      background: lightblue;
      height: 30px;
      line-height: 30px;
      padding-left: 180px;
    }

    section {
      background: lightyellow;
      min-height: 600px;
    }

    footer {
      background: lightgray;
      height: 50px;
      text-align: center;
      line-height: 50px;
    }

    #container {
      width: 1010px;
      height: auto;
      margin: auto;
      background: #E2F9AA;
      padding-bottom: 10px;
    }

    ul li {
      list-style: none;
      width: 190px;
      height: 200px;
      float: left;
      background: lightyellow;
      margin-left: 10px;
      margin-top: 10px;
    }

    ul li img {
      width: 190px;
      height: 170px;
      display: block;
      cursor: pointer;
    }

    ul li div {
      background: #7DBD50;
      width: 185px;
      height: 30px;
      line-height: 30px;
      padding-left: 5px;
    }

    a {
      text-decoration: none;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>汽车自选超市</header>
  <nav>
    <a href="./index.php">跑车</a>
    <a href="./index.php">卡车</a>
    <a href="./index.php">二手车</a>
    <a href="./index.php">新能源</a>
  </nav>
  <section>
    <div id="container">
      <ul>
          <?php
          include "./data/data_cars.php";
          foreach ($carList as $value){

          ?>
            <li>
              <a href="#">
                <img src="<?php echo $value['path']?>">
                <div><?php echo $value['name']?> </div>
              </a>
            </li>

       <?php } ?>
      </ul>
      <div style="clear: both;"></div>
    </div>
  </section>
  <footer>版权所有</footer>
</body>

</html>