<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/20
 * Time: 22:56
 */
//锁定文件
$filename = "06.text"; //声明要打开的文件
$fd = fopen($filename,'w'); //以W 模式打开文件
flock($fd,LOCK_EX);//锁定文件（独占共享）
fwrite($fd,"hightman1");//向文件写入内容
flock($fd,LOCK_UN);//解除锁定
fclose($fd);//关闭文件指针
readfile($filename);//输出文件内容