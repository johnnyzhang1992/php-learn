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
    public  $name;  //定义成员变量
    public  $height;
    public  $avoirdupois;
    function bootFootball($name,$height,$avoirdupois){ //声明成员方法
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois =$avoirdupois;
        echo "姓名：".$this->name.";<br>";
        echo "身高：".$this->height.";<br>";
        echo "体重：".$this->avoirdupois.";<br>";
        if($this->height<180 && $this->avoirdupois<85){
            return $this->name.":符合踢足球的要求！<br>"; //方法实现的功能
        }else{
            return $this->name.":不符合踢足球的要求！<br>"; //方法实现的功能
        }
    }
}
$sport1 = new SportObject1(); //实例化类，并传递参数
echo $sport1->bootFootball('Mike','185','80'); //执行类中的方法

//类常量
class BookObject{
    const BOOK_TYPE = '计算机图书'; //声明常量
    public $object_name; //声明变量，用于存放商品名称
    function setObjectName($name){ //声明方法
        $this->object_name = $name; //设置成员变量值
    }
    function getObjectName(){ //声明方法
        return$this->object_name;
    }
}
$book = new BookObject(); //实例化对象
$book->setObjectName('PHP类'); //调用方法 setObjectName()
echo BookObject::BOOK_TYPE."->"; //输出常量 BOOK_TYPE
echo $book->getObjectName(); //调用方法 getObjectName()

//
