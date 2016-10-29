<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/29
 * Time: 21:38
 */
//PHP加密函数

//使用crypt()函数加密
// string crypt(string str [,string salt])
//参数str 是需要加密的字符串，参数salt 为加密是使用的干扰串，如果忽略第二个参数，则会随机生成一个干扰串
//$str = 'This is an example!';
//echo '<p>加密前$str 的值为：'.$str;
//$crypttostr = crypt($str,'$1$esdkewuy'); //对字符串加密
//echo '<p>加密后的$str 的值为：'.$crypttostr;

//连接数据库
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'test11') or die ('数据库访问错误'.mysqli_errno());
mysqli_query($conn,"set names utf8_general_ci");

$html = <<<HTML
  <form action="" id="form1" name="form1" method="post">
     <table>
     <tr>
     <td><label for="username">用户名：</label><input type="text" name="username" id="username" size="15"/></td>
     <td><input type="submit" name="submit" value="检查" id="submit" /></td>
</tr>
</table>
  </form>
HTML;
echo $html;

if(trim($_POST['username']) != ''){ //trim()函数去掉字符串两边的空格 判断输入不为空
    $user = crypt(trim($_POST['username']),'tm'); //对用户名进行加密
    $sql = "select * from tb_user where user = $user "; //生成查询语句
    $rst = mysqli_query($conn,$sql); //执行语句，返回结果集
    if(mysqli_num_rows($rst)>0){ //如果结果集大于0
        echo "<p style='color: red'>用户名已存在";
    }else{
       echo '<p style="color:green ">恭喜您：用户名可以使用！';
    }
}