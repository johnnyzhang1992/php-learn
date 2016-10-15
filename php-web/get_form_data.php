<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/15
 * Time: 22:59
 */
$html = <<<HTML
    <form name="form1" method="post" action=>
       <div style="margin-bottom: 10px">用户名：<input type="text" name="user" style="width: 200px"></div>
       <div style="margin-bottom: 10px">密&nbsp;码：<input type="password" name="pwd" style="width: 200px"></div>
       <div style="margin-bottom: 10px">性&nbsp;别：
            <input type="radio" name="sex" value="man" checked>男
            <input type="radio" name="sex" value="woman" >女
        </div>
        <div style="margin-bottom: 10px">
           意见主题：
           <select name="select" id="" size="1">
              <option value="公司发展" selected>公司发展</option>
              <option value="管理制度" selected>管理制度</option>
              <option value="后勤服务" selected>后勤服务</option>
              <option value="员工薪资" selected>员工薪资</option>
           </select>
        </div>
        <div style="margin-bottom: 10px">
           <input type="file" name="file" size="15" style="width: 200px">
           
        </div>
        <input type="submit" name="submit" value="提交">
       
    </form>
HTML;
echo $html;
//获取文本框、密码、隐藏域、按钮、文本的值
if($_POST['submit'] == "提交" ){
    echo "您输入的用户名为：".$_POST["user"]."&nbsp;&nbsp;密码为：".$_POST["pwd"];
    //获取单选框的值
    echo "<br>您选择的性别是：".$_POST["sex"];
    //复选框的类似
    //获取下拉列表框/菜单列表框的值
    echo "<br>您选择的意见主题是：";
    echo $_POST["select"]."&nbsp;";
    //获取文件域的值
    echo "<br>文件名：".$_POST["file"];
}
