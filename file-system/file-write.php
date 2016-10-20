<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/20
 * Time: 21:43
 */
//将数据写入文件
$filepath = '04.text';
$str = "此情可待成追忆   只是当时已惘然";
echo '<p>用fwrite()函数写入文件:';
$fopen = fopen($filepath,'wb');
fwrite($fopen,$str); //写入内容
fclose($fopen); //关闭文件
readfile($filepath); //读取文件
echo "<p>用file_put_contents()函数写入文件:";
file_put_contents($filepath,$str);  //写入内容
readfile($filepath); //读取文件
