<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/8
 * Time: 23:29
 */
//内容编辑页面
require 'class/system.php';

$url = $_SERVER["QUERY_STRING"];
$url_parse = explode('=', $url);
$id = $url_parse[1];
//$id = $_POST['id'];
function get_blog_list($id){
    $sys_conn1 = new ConnDB();
    $conn = $sys_conn1->GetConn();
    mysqli_query($conn,"set names 'utf8' ");

    $sql = mysqli_query($conn," select *from tb_blog where id='$id'");
    $info = mysqli_fetch_array($sql);

    return $info;
}
$item = get_blog_list($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME ?>| 编辑文章</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <div class="add-blog col-sm-12">
        <div class="breadcrumb"><a href="index.php" style="margin-right:5px ">文章</a>\<span style="margin-left: 5px"><?php echo $id ?></span></div>
        <form class="form-group form-horizontal" action="controller/update_blog.php?id=<?php echo $id ?>" method="post"  name="edit-blog-form">
            <div class="blog_id form-group col-sm-12 clearfix">
                <label for="blog_id" class="col-sm-1 control-label" style="text-align: left">id：</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control"  name="blog_id" id="blog_id" placeholder="<?php echo $item['id'] ?>" />
                </div>
            </div>
            <div class="blog_title form-group col-sm-12 clearfix">
                <label for="blog_title" class="col-sm-1 control-label" style="text-align: left">标题：</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="<?php echo $item['title'] ?>" />
                </div>
            </div>
            <div class="blog_title form-group col-sm-12 clearfix">
                <label for="blog_tag" class="col-sm-1 control-label" style="text-align: left">标签：</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="blog_tag" id="blog_tag" placeholder="<?php echo $item['tag'] ?>" />
                </div>
            </div>
            <div class="form-group col-sm-12 clearfix">
                <label for="blog_content" class="control-label" style="padding: 0 15px">内容:</label>
                <textarea class="form-control" rows="6" id="blog_content" name="blog_content" style=""><?php echo $item['content'] ?></textarea>
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



