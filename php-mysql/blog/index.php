<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/31
 * Time: 23:01
 */
require 'class/system.php';
//主页
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="content col-md-10 col-md-offset-1">
    <div class="main-content col-md-8">
        <div class="content-header clearfix">
          <span class="pull-left">最新动态</span>
            <span class="pull-right">
                <a href="edit.php">写文章</a>
            </span>
        </div>
        <div class="blog-content">
            <ul class="blog-list">
                <li class="blog-item">
                    <div class="item-title">
                        <h4>标题</h4>
                    </div>
                    <div class="item-tag">
                        <a href="#" class="btn btn-info">前端</a>
                    </div>
                    <div class="item-content">
                        这是内容，这是内推，这真的是内容，这真的是内容啊
                    </div>
                </li>
                <li class="blog-item">
                    <div class="item-title">
                        <h4>标题</h4>
                    </div>
                    <div class="item-tag">
                        <a href="#" class="btn btn-info">前端</a>
                    </div>
                    <div class="item-content">
                        这是内容，这是内推，这真的是内容，这真的是内容啊
                    </div>
                </li>
                <li class="blog-item">
                    <div class="item-title">
                        <h4>标题</h4>
                    </div>
                    <div class="item-tag">
                        <a href="#" class="btn btn-info">前端</a>
                    </div>
                    <div class="item-content">
                        这是内容，这是内推，这真的是内容，这真的是内容啊
                    </div>
                </li>
                <li class="blog-item">
                    <div class="item-title">
                        <h4>标题</h4>
                    </div>
                    <div class="item-tag">
                        <a href="#" class="btn btn-info">前端</a>
                    </div>
                    <div class="item-content">
                        这是内容，这是内推，这真的是内容，这真的是内容啊
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="side-content col-md-4">
       <div class="user-card" style="text-align: center">
           <div class="avatar" style="">
               <img src="images/avatar/avatar.JPG" alt="" style="width: 60px;height: 60px">
           </div>
           <div class="user-name">
               <a href="#">小小梦工场</a>
           </div>
           <div class="user-description">
               <p>时间会告诉你答案</p>
           </div>
       </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
