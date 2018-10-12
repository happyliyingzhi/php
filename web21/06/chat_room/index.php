<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    html,
    body {
      height: 100%;
      box-sizing: border-box;
    }

    body {
      padding: 10px;
      margin: 0;
      /* padding: 20px; */
      background-color: #e7e7e7;
      display: flex;
      flex-direction: column;
    }

    .user img {
      max-width: 80px;
      max-height: 80px;
    }

    .clearfix::before,
    .clearfix::after {
      content: '';
      visibility: hidden;
      clear: both;
      line-height: 0;
      height: 0;
      display: block;
    }

    .clearfix {
      zoom: 1;
    }

    .f_l {
      float: left;
    }

    .f_r {
      float: right;
    }

    .container {
      margin: 0px auto 0;
      width: 100%;
      min-width: 600px;
      flex: 1;
      display: flex;
      flex-direction: column;
      background-color: white;
      border: 1px solid skyblue;
      border-radius: 10px;
    }

    .message {
      border-bottom: 1px solid skyblue;
      /* height: 400px; */
      flex: 1;
      overflow-y: scroll;
      padding: 20px;
      box-sizing: border-box;
      transition: all 2s;
    }

    .control {
      height: 100px;
      /* display: flex; */
      padding-left: 50px;
      padding-right: 50px;
    }

    .inputBox {
      height: 60px;
      margin-top: 20px;
      border-radius: 6px;
      outline: none;
      padding: 0;
      box-sizing: border-box;
      /* width: 500px; */
      width: 50%;
      /* flex: 5; */
      font-size: 30px;
      box-shadow: 0 0 3px gray;
      border: 1px solid #ccc;
      transition: all .2s;
      padding-left: 10px;
    }

    .min {
      width: 30%;
    }

    .inputBox:focus {
      border-color: skyblue;
      box-shadow: 0 0 3px skyblue;
    }

    .sendButton {
      height: 70px;
      margin-top: 15px;
      margin-left: 20px;
      background-color: yellowgreen;
      width: 15%;
      border: none;
      outline: none;
      border-radius: 10px;
      color: white;
      font-size: 40px;
      font-family: '微软雅黑';
      cursor: pointer;
    }

    .message>div>a {
      text-decoration: none;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: skyblue;
      text-align: center;
      line-height: 50px;
      color: white;
      font-size: 25px;
      font-weight: 700;
      font-family: '微软雅黑';
    }

    .message>.left>a {
      background-color: hotpink;
    }

    a>img {
      width: 100%;
      height: 100%;
    }

    .message>.right>a {
      background-color: yellowgreen;
    }

    .message>div {
      padding: 0;
    }

    .message>div>p {
      max-width: 600px;
      min-height: 28px;
      margin: 0 10px;
      padding: 10px 10px;
      background-color: #ccc;
      border-radius: 10px;
      word-break: break-all;
      position: relative;
      line-height: 28px;
      font-weight: 400;
      font-family: '微软雅黑';
      color: white;
      font-size: 20px;
    }

    .message>.left>p {
      background-color: skyblue;
    }

    .message>.left>p::before {
      content: '';
      position: absolute;
      border-top: 6px solid transparent;
      border-bottom: 6px solid transparent;
      border-right: 6px solid skyblue;
      left: -5px;
      top: 15px;
    }

    .message>.right>p {
      color: black;
    }
    .message p>img{
      max-width:500px ;
    }

    .message>.right>p::before {
      content: '';
      position: absolute;
      border-top: 6px solid transparent;
      border-bottom: 6px solid transparent;
      border-left: 6px solid #ccc;
      right: -6px;
      top: 15px;
    }

    h2 {
      margin: 0;
      padding-bottom: 5px;
      font-family: '微软雅黑';
    }

    .right h2 {
      text-align: right;
    }

    .user a {
      font-weight: 700;
      color: black;
    }

    .f_r a {
      font-size: 12px;
      text-decoration: none;
      border-radius: 5px;
      padding: 3px;
      background-image: linear-gradient(to bottom, #d9534f 0, #c12e2a 100%);
      color: white;
    }

    .title {
      padding-bottom: 5px;
    }
  </style>
</head>
<?php
//接受表单的信息
$id=$_COOKIE['ids'];
//var_dump($id);
//连接数据库
$link = mysqli_connect('127.0.0.1','root','root','itheima');
//查询sql语句
$sql="select * from chat_user where id='{$id}'";
//执行sql语句
$date=mysqli_query($link,$sql);
//取出结果集
$res=mysqli_fetch_assoc($date);

?>
<body>
  <div class="title">
    <h1 class="f_l">聊天室</h1>
    <div class="user f_r">
      <h2 class=""><?php echo $res['userName'] ?></h2>
      <img src="./images/icon/<?php echo $res['userIcon'] ?>" alt="">
      <a href="./02.login.html">登出</a>
    </div>

  </div>
  <div class="container">
    <div class="message">
      <div class="left clearfix">
        <h2>不知火舞</h2>
        <a href="#" class='f_l'>
          <img src="./images/icon/不知火舞_icon.png" alt="">
        </a>
        <p class='f_l'>我要吃西兰花
          <br>
          <img src="./images/message/laugh.png" alt="">

        </p>
      </div>

        <?php
        //表与表之间的连接关系,查询sql语句
       // $sql="select userName userIcon user_id content picture from chat_user inner join chat_message on chat_user.id=chat_message.user_id";
        $sql = "select userName,userIcon,content,picture,user_id from chat_user inner join chat_message on chat_user.id = chat_message.user_id";
        //执行sql语句
        $res=mysqli_query($link,$sql);
        //取出结果集
        $date1=mysqli_fetch_all($res,1);
//        var_dump($date1);
//        die;
      //渲染在页面上
       foreach ($date1 as $v) {
           if ($v['user_id'] == $id) {

               ?>
               <div class="right clearfix">

                   <h2><?php echo $v['userName']; ?></h2>
                   <a href="#" class='f_r'>
                       <img src="./images/icon/<?php echo $v['userIcon']; ?>" alt="">
                   </a>
                   <p class='f_r'><?php echo $v['content']; ?>
                       <br>
                       <img src="./images/message/<?php echo $v['picture']; ?>" alt="">
                   </p>

               </div>

           <?php } else {

               ?>
               <div class="left clearfix">
                   <h2><?php echo $v['userName'] ?></h2>
                   <a href="#" class='f_l'>
                       <img src="./images/icon/<?php  echo $v['userIcon']?>" alt="">
                   </a>
                   <p class='f_l'><?php  echo $v['content']?>
                       <br>
                       <img src="<?php  echo $v['picture'] ?>" alt="">
                   </p>
               </div>

               <?php
           }
       }

   ?>

    </div>
    <form action="./saveMessage.php" method="post" enctype="multipart/form-data">
      <div class="control">
        <input type="text" class='inputBox f_l' name="content">
        <input type="file" class="inputBox min f_l" name="picture" >
        <input type="submit" class='sendButton f_r' value='发 送'>
      </div>
    </form>
  </div>
</body>

</html>
<!-- 导入JQ -->
<script src="./js/jquery.min-1.72.js"></script>