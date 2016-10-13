<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/12
 * Time: 22:06
 */
echo "<h2 style='color:red'>注意不要使用单引号,会出错!!!</h2>";
echo '<h3>这是导航页面</h3>';
// << 界定符
$i = '显示该行内容';
echo<<<std
这和双引号没有什么区别，\$i 同样可以被输出出来。<p>
\$i的内容为:<b>$i</b>
std;
//定义数组
$arr1 = array('a','b');
$arr2 = array(0=>'php',1=>'is','the'=>'the','best'=>'best');
//echo $arr1 ,$arr2;
//监测数据类型
$boo = '04233676868';
if(is_numeric($boo))
    echo "Yes,the \$boo is a phone number: .$boo!<br>";
else
    echo "Sorry,This is an error"."<br>";

//定于常量
define("MESSAGE","能看到一次");
echo MESSAGE."<br>";
//echo Message."<br>";
//$name = "count";
//echo constant($name)."<br>";
echo (defined("MESSAGE"))."<br>";
//预定义常量
echo "当前文件路径：".__FILE__;
echo "<br>当前行数：".__LINE__;
echo "<br>当前php的版本信息：".PHP_VERSION;
echo "<br>当前操作系统：".PHP_OS;
//变量作用域
$example = "------------在函数外-----------";
function example(){
    $example = "------------在函数内----------";
    echo "<br>在函数内部输出的内容是：".$example;
}
example();
echo "<br>在函数外面输出的内容是：".$example;
//静态变量和普通变量的区别
function zdy(){
   static $message = 0;
    $message +=1;
    echo $message." ";
}
function zdy1(){
    $message = 0;
    $message +=1;
    echo $message." ";
}
echo "<br>";
for($i=0;$i<10;$i++){
    zdy();
}
echo "<br>";
for($i=0;$i<10;$i++){
    zdy1();
}

echo "<br>";
//php预定义变量
echo "<br>服务器的ip地址：".$_SERVER['SERVER_ADDR'];
echo "<br>服务器的port：".$_SERVER['REMOTE_PORT'];
echo "<br>服务器的ip：".$_SERVER['REMOTE_ADDR'];
echo "<br>服务器主机名称：".$_SERVER['SERVER_NAME'];
echo "<br>HTTP 端口：".$_SERVER['SERVER_PORT'];
echo "<br>执行脚本的相对路径：".$_SERVER['SCRIPT_NAME'];
//位运算符
$m =8;
$n = 12;
echo "\$m=".$m.";\$n=".$n."<br>";
$mn = $m & $n;     //位与
echo $mn."<br>";
$mn = $m | $n;    //位或
echo $mn."<br>";
$mn = $m ^ $n;    //位异或
echo $mn."<br>";
$mn = ~ $n;      //位取反
echo $mn."<br>";
//三元运算符
$value = 100;
echo($value == true)?"三元运算符":"没有该值";


?>