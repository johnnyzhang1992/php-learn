<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/16
 * Time: 0:00
 */
//设置当前所在的时区
date_default_timezone_set("Asia/Hong_kong");
echo "获取当前时间戳：".time();
echo "<br>当前的日期为：".date("Y-m-d",time());
echo "<br>当前的时间为：".date('H:i:s',time());
//获取当前日期
echo "<br>Now:".date('Y-m-d');
//获取日期信息
$arr = getdate();
echo "<br>";
echo $arr["year"]."-".$arr["mon"]."-".$arr["mday"]." ";//返回当前的日期信息
echo $arr["hours"].":".$arr["minutes"].":".$arr["seconds"]." ".$arr["weekday"];//返回当前的时间信息
echo "<br>Today is the ".$arr["yday"]."th of year";
//实现倒计时功能
$time1 = strtotime(date("Y-m-d H:i:s"));//当前的系统时间
$time2 = strtotime("2017-2-10 17:10:00");//放假的时间
$time3 = strtotime("2017-1-1");//2010年元旦
$sub1 = ceil(($time2-$time1)/3600); //(60秒*60分)秒/小时
$sub2 = ceil(($time3-$time1)/86400);//(60秒*60分*24小时)秒/天
echo "<br>离放假还有 ".$sub1." 小时";
echo "<br>离2017年元旦还有 ".$sub2." 天";
//计算页面脚本的运行时间
//声明run_time函数
function run_time(){
    list($msec,$sec) = explode(" ",microtime());
    return((float)$msec + (float)$sec);
}
$start_time = run_time();
$end_time = run_time();
echo "<br>该实例运行时间为：".($end_time-$start_time)."秒";

