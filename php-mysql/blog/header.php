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
          <a href="index.php"> <?php echo $_COOKIE['site_name'] ?></a>
        </span>
        <span class="pull-right">
            <?php
            if(!isset($_COOKIE['username'])){
                echo "<a href='/#'>".$_COOKIE['username']."</a>";
            }else{
             echo "<a href=\"login.php\">登录</a><a href=\"register.php\">注册</a>";
            }
            ?>

        </span>
    </div>
</div>
