
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">首页</a></li>
              </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">搜索</button>
          </form>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" ><img src="./img/<?php echo isset($_SESSION['res']['user_icon'])? $_SESSION['res']['user_icon']:'admin.png'?>" alt=""><?php  echo isset($_SESSION['res']['user_name'])? $_SESSION['res']['user_name']:'游客'?></a></li>
<li><a href="login.php">登入</a></li>
<li><a href="exit.php">注销</a></li>

</ul>
</div>