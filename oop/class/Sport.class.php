<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/27
 * Time: 23:04
 */
//声明类
class Sport{
    private $cont; //声明私有变量
    public function  __construct($cont) // 声明方法
    {
        $this->cont = $cont; //创建构造方法
    }
    public function __toString() //创建__toString()方法
    {
       return $this->cont;
    }
}