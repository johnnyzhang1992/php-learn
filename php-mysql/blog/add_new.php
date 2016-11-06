<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/31
 * Time: 23:04
 */
//添加新blog
require 'class/system.php';
//主页
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME ?>|新建blog</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .control-label{
            line-height: 34px;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="content col-md-10 col-md-offset-1">
    <div class="add-blog">
        <div class="breadcrumb"><a href="index.php" style="margin-right:5px ">blog</a>\<span style="margin-left: 5px">新建</span></div>
        <form class="form-group form-horizontal" action="controller/add_new.php" method="post"  name="add-blog-form">
            <div class="blog_title form-group col-sm-12 clearfix">
                <label for="blog_title" class="col-sm-1 control-label" style="text-align: left">标题：</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="请填写标题" />
                </div>
            </div>
            <div class="form-group col-sm-12 clearfix">
                <label for="blog_content" class="control-label" style="padding: 0 15px">内容:</label>
                <textarea class="form-control" rows="6" id="blog_content" name="blog_content" style=""></textarea>
            </div>
            <div class="form-group clearfix">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-info pull-left">提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
