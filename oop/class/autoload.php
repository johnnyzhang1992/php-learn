<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/27
 * Time: 23:08
 */
function __autoload($class_name){ //创建 __sutoload()方法
    $class_path = $class_name.'.class.php'; //类文件路径
    if(file_exists($class_path)){ //判断类文件是否存在
        include_once($class_path); //动态引入类文件
    }else{
        echo '<p>类路径错误。';
    }
}
//__autoload('Sport');
//require_once('Sport.class.php');
$myBook = new Sport("江山代有人才出 各领风骚数百年");
echo $myBook;