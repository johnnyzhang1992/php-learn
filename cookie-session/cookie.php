<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/16
 * Time: 18:22
 */
//设置cookie并且读取
if(!isset($_COOKIE['visittime'])){//检测cookie文件是否存在，如果不存在
    setcookie("visittime",date("Y-m-d H:i:s"));//设置一个cookie变量
    echo "欢迎您第一次访问网站<br>";//输出字符串
}else{//如果cookie存在
    setcookie("visittime",date("Y-m-d H:i:s"),time()+60*60);//设置保存cookie失效时间的变量
    echo "您上次访问网站的时间为：".$_COOKIE["visittime"];
    echo "<br>";
}
echo "您本次访问网站的时间为：".date("Y-m-d H:i:s");//输出当前的访问时间
//删除cookie
//使用setcookie()函数删除cookie
//setcookie("visittime",time()-1);//将cookie的失效时间设置为当前时间-1秒