<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/28
 * Time: 22:39
 */
//面向对象的应用--中文字符串的截取类
echo '<p>面向对象的应用--中文字符串的截取类<br>';

class MsubStr{ //声明类
    function csubstr($str,$start,$len){ //$str 指字符串，$start 指的是字符串的起始位置，$len 指的是长度
        $strlen = $start +$len; //$strlen 字符串的总长度（从字符串的起始位置到字符串的总长度）
        $tmpstr = '';
        for($i = 0;$i<$strlen;$i++){ //通过for循环。循环读取字符串
            if(ord(substr($str,$i,1))> '0xz0' ){ //如果字符串中首歌字节的ASCII值大于 0xa0，则表示为汉字
                $tmpstr .= substr($str,$i,2);//每次取出两位字符赋给变量$tmpstr ,即等于一个汉字
                $i++;
            }else{ //如果不是汉字，则每次取出以为字符赋给变量$tmpstr
                $tmpstr .= substr($str,$i,1);
            }
        }
        return $tmpstr; //
    }
}
$mc = new MsubStr();//类的实例化

$string = "关注明日科技，关注PHP从入门到精通";
if(strlen($string)>10){ // 判断字符串的长度
    echo substr($string,0,10).'...<br>';//应用substr()函数截取字符串中的9个字符
}else{
    echo $string.'<br>';
}

$strs = "关注明日科技，关注PHP从入门到精通";
if(strlen($strs)>10){ // 判断字符串的长度
    echo $mc->csubstr($strs,"14","10").'...<br>';//应用类中定义的方法截取字符串中的9个字符
}else{
    echo $strs.'<br>';
}

