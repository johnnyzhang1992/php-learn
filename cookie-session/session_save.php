<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/17
 * Time: 21:18
 */
//连接数据库
function _session_open($save_path,$session_name){
    global $handle;
    $handle = mysqli_connect('localhost','root','') or die ('数据库连接失败');
    mysqli_select_db($handle,'test11') or die('数据库连接失败');
    return(true);

}
//封装session_close()函数
function _session_close(){
    global $handle;
    mysqli_close($handle);
    return(true);
}
//