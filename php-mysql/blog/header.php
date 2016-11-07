<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/1
 * Time: 23:51
 */
//网站header
//require 'controller/get_home_data.php';
?>
<div class="header col-md-12">
    <div class="col-md-10 col-md-offset-1">
        <span class="site-name pull-left">
          <a href="index.php"> <?php echo @$_COOKIE['site_name'] ?></a>
        </span>
        <!-- Single button -->
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" style="min-width: 160px">
                <?php
                if(!empty($_COOKIE['user_name'])){
                    echo $_COOKIE['user_name'];
                }else{
                    echo "<a href=\"login.php\" >登录</a><a href=\"register.php\">注册</a>";
                }
                ?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu " role="menu">
                <?php
                if(!empty($_COOKIE['user_name'])){
                    echo "<li><a href='dashboard.php'>我的主页</a></li><li><a href='#'>退出</a></li>";
                }else{}
                ?>
            </ul>
        </div>
        <span class="pull-right">

        </span>
    </div>
</div>
