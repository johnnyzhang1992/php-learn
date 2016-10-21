<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/21
 * Time: 22:38
 */
//类
//成员方法
class SportObject{
    function beatBastball($name,$height,$avoirdupois,$age,$sex){ //声明成员方法
        echo "姓名：".$name.";<br>";
        echo "体重：".$avoirdupois.";<br>";
        echo "年龄：".$age.";<br>";
        echo "性别：".$sex.";<br>";
        if($height>180 and $avoirdupois<100){
            return $name.",符合打篮球的要求！<br>"; //方法的实现
        }else{
            return $name.",不符合打篮球的要求!<br>"; //方法的实现
        }
    }
}
$sport = new SportObject();
echo $sport->beatBastball('明日','185','80','20','男');
//成员变量
class SportObject1{
    public  $name;
    public  $height;
    public  $avoirdupois;
    function bootFootball($name,$height,$avoirdupois){
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois =$avoirdupois;
        echo "姓名：".$this->name.";<br>";
        echo "身高：".$this->height.";<br>";
        echo "体重：".$this->avoirdupois.";<br>";
        if($this->height<180 && $this->avoirdupois<85){
            return $this->name.":符合踢足球的要求！<br>";
        }else{
            return $this->name.":不符合踢足球的要求！<br>";
        }
    }
}
$sport1 = new SportObject1();
echo $sport1->bootFootball('Mike','185','80');