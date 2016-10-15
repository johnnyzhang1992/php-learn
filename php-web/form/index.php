<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/15
 * Time: 22:11
 */
//了解wrap的soft和hard换行标记的区别
$html = <<<HTML
    <form name="form1" method="post" >
       <textarea name="a" id="" cols="30" rows="5" wrap="soft">
       我使用的软回车！我输出后不换行！
       </textarea>
       <textarea name="b" id="" cols="30" rows="5" wrap="hard">
       我使用的是硬回车！我输出后会自动换行！
       </textarea>
       <input type="submit" name="Submit">
    </form>
HTML;
echo $html;

echo nl2br($_POST['a'])."<br>";
echo nl2br($_POST["b"])."<br>";
