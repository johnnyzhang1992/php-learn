<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/29
 * Time: 22:29
 */
//使用MD5()函数进行加密
// string md5(string str [,bool raw_output])
//字符串str为要加密的明文，raw_output 参数如果设为 true，则函数返回一个二进制形式的密文，该参数默认为 false

//register.php 是注册信息填写页面
//register_ok.php是注册信息填写后的信息处理页面
//index.php 是信息入口后跳转的页面
echo '<p> md5()函数和sha1()函数对比<br>';
echo 'md5()加密-PHPER:'.md5('PHPER').'<br>';
echo 'md5(,true)加密-PHPER:'.md5('PHPER',true).'<br>';
// string sha1(string str [,bool raw_out_put])
echo 'sha1()加密-PHPER:'.sha1('PHPER').'<br>';
echo 'sha1(,true)加密-PHPER:'.sha1('PHPER',true).'<br>';