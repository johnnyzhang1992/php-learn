<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/19
 * Time: 22:29
 */
//打开文件
//$f_open = fopen("file.text",'rb');//打开文件
//读写文件
//使用readfile()函数读取文件内容
readfile("file.text");
echo "<br>";
//使用file()函数读取文件的内容
$f_arr = file('file.text');
foreach ($f_arr as $cont){
    echo $cont."<br>";
}
//使用file_get_contents()函数读取文件内容：
$f_chr = file_get_contents('file.text');
echo $f_chr;

//fclose($f_open);//操作完成后关闭文件

//关闭文件