<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/20
 * Time: 22:30
 */
//文件处理
$filename = "05.text"; // 指定文件路径及文件名
if(is_file($filename)){ //判断文件是否存在
    echo "文件总字节数：".filesize($filename)."<br>"; //输出总字节数
    $fopen = fopen($filename,'rb'); //打开文件
    echo "初始指针位置是：".ftell($fopen); //输出指针位置
    fseek($fopen,33); //移动指针
    echo "<br>使用fseek()函数后指针位置：".ftell($fopen);//输出移动后的指针位置
    echo "<br>输出当前指针后面的内容：".fgets($fopen);//输出从当前指针到行尾的内容
    if(feof($fopen)){ //判断指针是否指向文件末尾
        echo "<br>当前指针指向文件末尾：".ftell($fopen); //如果指针指向了文件尾，则输出指针位置
        rewind($fopen);//使用rewind()函数
        echo "<br>输出使用rewind()函数后指针的位置：".ftell($fopen); //查看使用函数后指针的位置
        echo "<br>输出前33个字节的内容：".fgets($fopen,33);//输出前33个字节的内容
        fclose($fopen); //关闭文件
    }
    else{
        echo '文件不存在';
    }
}