<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/20
 * Time: 22:01
 */
//目录处理
$path = "D:\\laragon\\www\\php-learning\\file-system";
if(is_dir($path)){ //检测是否是一个目录
    if($dire = opendir($path)){ //判断打开目录是否成功
        echo $dire; // 输出目录指针
    }
}else{
    echo "路径错误！";
    exit();
}
closedir($dire);//关闭目录

