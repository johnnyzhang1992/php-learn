<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/11/8
 * Time: 23:29
 */
require 'class/system.php';

$url = $_SERVER["QUERY_STRING"];
$url_parse = explode('=', $url);
$id = $url_parse[1];
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
        <div class="article-title col-sm-12 text-center"><h4><?php echo $item['title'] ?></h4></div>
        <div class="article-tag">标签：<a href='#' class='btn btn-info' style=" padding: 2px 8px;"><?php echo $item['tag'] ?></a></div>
        <div class="article-content col-sm-12" style="margin-top: 10px"><?php echo $item['content'] ?></div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>



