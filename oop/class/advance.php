<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/25
 * Time: 21:49
 */
// PHP 对象的高级应用

//final 关键字

//final class name{}
// // 说明该类不可以再被继承，也不能再有子类

final class SportObject01{ // final 类
    function __construct(){
        echo '<p>initialize object';
    }
}

//class MyBook extends SportObject01{
//    static function exam(){ //子类中的方法
//        echo 'You can\'t see me';
//    }
//}
//MyBook::exam(); // 调用子类方法
//看见看到程序无法执行


//抽象类
//抽象类是一种不能被实例化的类，只能作为其他类的父类使用，使用 abstract 关键词来声明
// abstract class AbstractName{}
//抽象方法没有方法体，其功能的实现只能在子类中完成
//在抽象方法后面要加' ; '

abstract class CommonObject{  //定义
    abstract function service($getName,$price,$num);
}
class MyBook extends CommonObject{
    function service($getName, $price, $num)
    {
        echo '<p>您购买的商品是： <b>'.$getName.'</b> 该商品的价格是：<b> '.$price.'</b> 元';
        echo '<p>您购买的数量是： <b>'.$num.'</b> 本';
        echo '<p>如发现缺页，损坏请在3日内更换';
        // TODO: Implement service() method.
    }
}
$book = new MyBook();
$book->service('《php从入门到精通》','85','3');

//接口的使用

//接口类通过 interface 关键词来声明，并且类中只能包含未实现的方法和一些成员方法
//子类通过 implements 关键词来实现接口

//声明接口 MPopedom
interface MPopedom{
    function popedom();
}
//声明接口 MPurview
interface  MPurview{
    function purview();
}
//创建子类 Member，实现一个接口 MPurview
class Member implements MPurview{
    function purview()
    {
        echo '<p>会员拥有权限。';
        // TODO: Implement purview() method.
    }
}
//创建子类 Manager ，实现多个接口 MPurview 和 MPopedom
class Manage implements MPurview,MPopedom{
    function popedom()
    {
        echo '<p>管理员还有会员的没有的权限。';
        // TODO: Implement popedom() method.
    }
    function purview()
    {
        echo '<p>管理员拥有会员的全部权限。';
        // TODO: Implement purview() method.
    }
}
$member = new Member(); //类Member 实例化
$manage = new Manage(); //类Manage 实例化
$member->purview(); //调用 $member对象的purview()方法
echo '<P>';
$manage->purview(); //调用 $manage对象的purview()方法
$manage->popedom(); //调用 $manage对象的popedom()方法