<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/8
 * Time: 18:30
 */
//连接数据库，创建表单
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>初始化网站</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body{
        font-size: 16px;
    }
    </style>
</head>
<body>
<div class="content col-md-8 col-md-offset-2">
    <div class="add-blog">
        <div class="breadcrumb"><span>初始化网站</span></div>
        <form class="form-group form-horizontal" action="controller/add_new.php" method="post"  name="install-form">
            <div class="site-name form-group col-sm-12 clearfix">
                <label for="site_name" class="col-sm-2 control-label" style="text-align: left">网站名字：</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="site_name" id="site_name" placeholder="小小梦工场" />
                </div>
            </div>
            <div class="site-owner form-group col-sm-12 clearfix">
                <label for="site_owner" class="col-sm-2 control-label" style="text-align: left">网站拥有者：</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="site_hoster" id="site_owner" placeholder="johnnyzhang" />
                </div>
            </div>
            <div class="site-owner form-group col-sm-12 clearfix">
                <label for="site_des" class="col-sm-2 control-label" style="text-align: left">网站描述：</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="site_description" id="site_des" placeholder="网站描述" />
                </div>
            </div>
            <div class="blog_title form-group col-sm-12 clearfix">
                <label for="mysql_host" class="col-sm-2 control-label" style="text-align: left">数据库地址：</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mysql_host" id="mysql_host" placeholder="localhost" />
                </div>
            </div>
            <div class="db_name form-group col-sm-12 clearfix">
                <label for="db_name" class="col-sm-2 control-label" style="text-align: left">数据库名称：</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="db_name" id="db_name" placeholder="blog" />
                </div>
            </div>
            <div class="db_pwd form-group col-sm-12 clearfix">
                <label for="db_pwd" class="col-sm-2 control-label" style="text-align: left">数据库名称：</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="db_pwd" id="db_pwd" />
                </div>
            </div>
            <div class="form-group clearfix">
                <div class="col-sm-12 ">
                    <button type="submit" class="btn btn-info btn-md pull-left">提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

