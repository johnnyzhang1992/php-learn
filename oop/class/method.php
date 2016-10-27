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
//作用是:党成员试图调用不存或不可见的成员方法时，php会先调用__call()方法来存储方法名和参数。
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