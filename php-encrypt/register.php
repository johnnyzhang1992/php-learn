<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/29
 * Time: 22:41
 */
//注册页面
$html = <<<HTML
  <form action="register_ok.php" id="form1" name="form1" method="post">
     <table>
        <tr><td><label for="username">用户名：</label><input type="text" name="username" id="username" size="15"/></td></tr>
        <tr> <td><label for="password">密&nbsp;码：</label><input type="password" name="password" id="password" size="15"/></td></tr>
        <tr><td><input type="submit" name="submit" value="登录" id="submit" /></td></tr>
     </table>
  </form>
HTML;
echo $html;

