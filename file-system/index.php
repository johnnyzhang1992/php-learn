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

//使用fgets()函数读取文件
$fopen = fopen('02.text','rb');
echo '<br>';
while(!feof($fopen)){ //feof()函数测试指针是否到了文件结束的位置
    echo fgets($fopen);//输出当前行
}
fclose($fopen);

//使用fgetss()函数读取文件
$fopen = fopen('02.text','rb');
echo '<br>';
while(!feof($fopen)){ //feof()函数测试指针是否到了文件结束的位置
    echo fgetss($fopen);//输出当前行
}
fclose($fopen);

//读取一个字符fgetc()
$fopen = fopen('01.text','rb');
echo '<br>';
while(false !==($chr = fgetc($fopen))){
    echo $chr;
}
fclose($fopen);

//读取指定长度的字串fread()
$filename = "03.text";
$fp = fopen($filename,'rb');
echo '<br>前32字节：';
echo fread($fp,32); //使用fread()读取文件的前32个字节
echo '<br>剩下内容：';
echo fread($fp,filesize($filename)); //输出其余的文件内容



//fclose($f_open);//操作完成后关闭文件

//关闭文件