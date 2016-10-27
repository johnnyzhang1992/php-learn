<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/26
 * Time: 22:38
 */
//魔术方法
//PHP 中雨很多以两个下划线开头的方法
//__construct(),__destruct(),__clone

//1: __get()和__set()方法
// 当程序试图写入一个不存在或不可见的成员变量，PHP会执行__set()方法
// 当程序调用一未定义或不可见的成员变量时，可以通过__get()方法来读取变量值
class CodeObject{
    private $type = '';
    private function __get($name){ // 声明魔术方法 __get()
        if(isset($this->$name)){ //判断变量是否被声明
            echo '<p> 变量'.$name.'的值为：'.$this->$name;
        }else{
            echo '<p>变量'.$name.'未定义，初始化为：0';
            $this->$name = 0; //如果未被声明，则对变量初始化
        }
    }
    private function __set($name,$value){
        if(isset($this->$name)){ //判断变量是否被声明
            $this->$name = $value;
            echo '<p> 变量'.$name.'赋值为：'.$value;
        }else{
            $this->$name = $value; //如果未定义，继续对变量进行赋值
            echo '<p>变量'.$name.'被初始化为：'.$value;
        }
    }
}
$MyComputer = new CodeObject(); //实例化对象
$MyComputer->type = 'DIY'; //给变量赋值
$MyComputer->type; //调用变量$type
$MyComputer->name; //调用变量

// __call() 方法
//作用是:当成员试图调用不存或不可见的成员方法时，php会先调用__call()方法来存储方法名和参数。
class S_Object{
    public function myDream(){ //类方。法
        echo '<p>调用的方法存下，直接执行此方法';
    }
    public function __call($name, $arguments) // _call()方法
    {
        echo '<p>如果方法不存在，则执行__call()方法。';
        echo '<p>方法名为：'.$name; //输出第一个参数，即方法名
        echo '<br>参数有：';
        var_dump($arguments);//输出第二个参数，是一个参数数组
        // TODO: Implement __call() method.
    }
}
$exam = new S_Object(); // 实例化对象
$exam->myDream(); //调用存在的方法
$exam->mDream('how','what','why');//调用不存在的方法

// __sleep() 和 __wakeup()方法
class Sp_Object{
    private $type = 'DIY'; // 声明私有变量
    public function getType(){  // 声明方法，用来调用私有变量
        return $this->type; //返回变量值
    }
    public function __sleep() // 声明魔术方法 __sleep()方法
    {
       echo '<p>使用 serialize()函数将对象保存起来，可以存放到文本文件，数据库等地方';
        return $this;
    }
    public function __wakeup() // 声明魔术方法__wakeup()方法
    {
       echo '<p>当需要该数据时，使用 unserialize() 函数对已序列化的字符串进行操作，将其转换回对象';
    }
}
//$myBook1 = new Sp_Object(); // 实例化对象
//$i = serialize($myBook1); //序列化对象
//echo '<p>序列化后的字符串：'.$i;
//$reBook = unserialize($i); //将序列化
//echo '<p>还原后的成员变量：'.$reBook->getType(); //调用新对象 $rebook 的 getType()方法

//解析失败

// __toString() 方法
//作用：当使用echo或 print 输出对象时，将对象转化为字符串
class Spo_Object{
    private $type = 'Diy';
    public function __toString()
    {
       return $this->type;
    }
}
$myCom = new Spo_Object(); //实例化对象
echo '<p>对象$myCom 的值为：'.$myCom;

//__autoload() 方法
//