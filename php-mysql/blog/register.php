<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/31
 * Time: 23:02
 */
//注册页面
require 'class/system.php';
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
    <div class="register-content col-md-6 col-md-offset-3">
        <form class="form-horizontal" role="form" method="post" name="register-form" action="controller/register_ok.php">
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">昵称</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="username" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">简介</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="user-description" id="description" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="user-email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="user-pwd" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
