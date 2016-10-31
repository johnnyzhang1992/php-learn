<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/12
 * Time: 22:06
 */
echo "<h2 style='color:red'>注意不要使用单引号,会出错!!!</h2>";
echo "<h3>这是导航页面</h3>";
//function get_dir_scandir(){
//    $tree = array();
//    foreach(scandir('./') as $single){
//        echo $single."<br/>\r\n";
//    }
//}
//get_dir_scandir();

function get_dir_glob(){
    $tree = array();
    foreach(glob('./*/*') as $single){
        echo "<p><a href='$single' target='_blank'>$single</a></p>";
    }
}
get_dir_glob();