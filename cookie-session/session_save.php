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
//封装session_read()函数，根据$key 查找session的名称和内容
function _session_read($key){
    global $handle; //全局变量$handle 链接数据库
    $time = time();  //设定当前时间
    $sql = "select session_data from tb_session where session_key='$key' and session_time>$time";
    $result = mysqli_query($handle,$sql);
    $row = mysqli_fetch_array($result);
    if($row){
        return($row['session_date']);
    }else{
        return(false);
    }
}
//封装session_write()函数
function _session_write($key,$data){
    global $handle;
    $time = 60*60; //设置失效时间
    $lapse_time = time() + $time; //得到时间戳
    $sql = "select session_data from tb_session where session_key='$key' and session_time>$lapse_time";
    $result = mysqli_query($handle,$sql);
    if(mysqli_num_rows($result) ==0){ //没有结果
        $sql = "insert into tb_session values('$key','$data',$lapse_time)"; //插入数据库SQL语句
        $result = mysqli_query($handle,$sql);
    }else{
        $sql = "update tb_session set session_key = '$key',session_date = '$data',session_time = $lapse_time where session_key = '$key'"; // 修改数据库语句
        $result = mysqli_query($handle,$sql);
    }
    return($result);
}
//封装session_destroy()函数，根据$key值将数据库中的session删除
function _session_destroy($key){
    global  $handle;
    $sql = "delete from tb_session where session_key = '$key'";
    $result = mysqli_query($handle,$sql);
    return($result);
}
//封装 session_gc()函数，根据给出的失效时间删除过期的session
function _session_gc($expiry_time){
    global $handle;
    $lapse_time = time(); //将参数$expiry_time()赋值为当前时间戳
    $sql = "delete from tb_session where expiry_time<$lapse_time";
    $result = mysqli_query($handle,$sql);
    return($result);
}
session_set_save_handler('_session_open','_session_close','_session_read','_session_write','_session_destroy','_session_gc');
session_start();
//下面为我们定义session
$_SESSION['user'] = 'mr';
$_SESSION['pwd'] = 'mrsoft';