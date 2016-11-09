<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/31
 * Time: 23:02
 */
//后台主页，展示blog列表，提供编辑、管理入口（编辑、删除、添加）
require 'class/system.php';
require 'controller/get_home_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .item-manage{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="content col-md-10 col-md-offset-1">
    <div class="side-content col-md-2">
        <div class="system-config breadcrumb">
            <a href="#system_config">系统管理</a>
        </div>
        <div class="blog-config breadcrumb">
            <a href="#blog_config">文章管理</a>
        </div>
    </div>
    <div class="main-content col-md-10">
        <div id="system_config">
            <div class="breadcrumb"><a href="dashboard.php" style="margin-right:5px ">后台</a>\<span style="margin-left: 5px">系统管理</span></div>
            <form class="form-group form-horizontal clearfix" action="controller/update_config.php" method="post"  name="update-system-config">
                <div class="site-name form-group col-sm-12 clearfix">
                    <label for="site_name" class="col-sm-2 control-label" style="text-align: left">网站名字：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="site_name" id="site_name" placeholder="<?php $system_info->out_name()  ?>" />
                    </div>
                </div>
                <div class="site-owner form-group col-sm-12 clearfix">
                    <label for="site_owner" class="col-sm-2 control-label" style="text-align: left">网站拥有者：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="site_hoster" id="site_owner" placeholder="<?php $system_info->out_owner() ?>" />
                    </div>
                </div>
                <div class="site-owner form-group col-sm-12 clearfix">
                    <label for="site_des" class="col-sm-2 control-label" style="text-align: left">网站描述：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="site_description" id="site_des" placeholder="<?php $system_info->out_description() ?>" />
                    </div>
                </div>
                <div class="form-group col-sm-12 clearfix">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-info pull-left">提交</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="blog_config">
            <div class="breadcrumb"><a href="dashboard.php" style="margin-right:5px ">后台</a>\<span style="margin-left: 5px">文章管理</span></div>
        </div>
        <div class="blog-content col-sm-12">
            <ul class="blog-list">
                <?php
                $item = $home_data->show_blog_list();
                $num = count($item);
                for($i=0;$i<$num;$i++){
                    $id = $i+1;
                    $item_content = '';
                    if(strlen($item[$i]['content'])>160){
                        $item_content = mb_substr($item[$i]['content'],0,160). '...';
                    } else{ $item_content = $item[$i]['content'];}

                    echo "<li class='blog-item'><div class='item-title'><h4><a href='/php-mysql/blog/article.php?id=$id' target='_blank'>".$item[$i]['title']."</a></h4></div>"
                        ."<div class='item-tag'><a href='#' class='btn btn-info'>".$item[$i]['tag']."</a></div >"
                        ."<div class='item-content'>".$item_content."</div >"
                        ."<div class='item-manage'><a href='/php-mysql/blog/edit.php?id=$id' class='btn btn-info' target='_blank'>编辑</a><a href='/php-mysql/blog/delete.php?id=$id' class='btn btn-warning' target='_blank'>删除</a></div>"
                        ."</li >" ;
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>