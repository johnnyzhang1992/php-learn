<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/20
 * Time: 22:13
 */
//浏览目录
$path = "D:\\laragon\\www\\php-learning\\file-system"; //要浏览的目录
if(is_dir($path)){ //检测是否是一个目录
    if($dire = scandir($path)){ //使用 scandir()函数去的所有
        foreach ($dire as $value){
            echo $value."<br>";
        }
    }
}else{
    echo "目录路径错误！";
    exit();
}
echo getcwd();//获取当前目录
