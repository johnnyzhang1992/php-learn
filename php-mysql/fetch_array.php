<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/30
 * Time: 20:39
 */
echo '<p>mysqli_query_array()函数</p>';
//使用 mysqli_fetch_array()函数从数组结果集中获取信息
//array mysqli_fetch_array(resource result [,int result_type])
//result:资源类型的参数，要传入的是由 mysqli_query()函数返回的数据指针
// result_type ： 可选参数，整数型参数

//object mysqli_fetch_object(resource result)
//返回的是一个对象而不是数组
echo '<p>mysqli_query_object()函数</p>';
$conn = mysqli_connect('localhost','root',''); // 连接数据库
mysqli_query($conn,"set names 'utf8' ");
mysqli_select_db($conn,'book') or die ('数据库访问错误'.mysqli_errno($conn)); //选择数据库
$sql = mysqli_query($conn,"select * from tb_book");//选择表
$info = mysqli_fetch_object($sql);
echo $info->bookname.'<br>';
foreach ($info as $key=>$detail){
    echo $key.'->'.$detail.'<br>';
}
$sql1 = mysqli_query($conn," select * from tb_book WHERE id=1");
$info1 = mysqli_fetch_object($sql1);
echo @'id:'.$info1->id.'<br>';
echo @'BookName:'.$info1->bookname.'<br>';
echo @'Price:'.$info1->price;
