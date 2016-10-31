<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/30
 * Time: 20:48
 */
//本实例实现一个图书信息检索的功能
$html = <<<HTML
<form action="" method="post" name="myform">
<table>
<tr>
<td width="605" height="51" bgcolor="#cc99ff">
<div style="text-align: center;">
<label for="txt_book">请输入图书名称：</label>
<input type="text" name="txt_book" id="txt_book" size="50" />
<input type="submit" name="submit" value="查询">
</div>
</td>
</tr>
</table>
</form>
HTML;
echo $html;
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'book') or die ('数据库访问错误'.mysqli_errno($conn));
mysqli_query($conn,"set names 'utf8' ");
$sql = mysqli_query($conn,"select * from tb_book"); //执行查询语句
$info = mysqli_fetch_array($sql);//获取查询结果，返回值为数组
if($_POST['submit'] == '查询'){ //判断按钮 submit 的值是否为查询
    $txt_book = trim($_POST['txt_book']); //获取文本框提交的值
    echo "<p>您输入的关键词为：$txt_book<br>";
    $sql = mysqli_query($conn," select * from tb_book where bookname LIKE '%".$txt_book."%'");//执行模糊查询
    $num = mysqli_num_rows($sql);//使用mysqli_num_rows()获取查询结果集中的记录数
    echo @'Rows:'.$num.'<br>';
    $info = mysqli_fetch_array($sql); //获取查询结果

    if (!$sql) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    if($info == false){
        echo "<div style='text-align: center;color: #ff0000;font-size: 14px'>对不起，您检索的图书信息不存在!</div>";
    }

}
do{
    $table = <<<HTML
<table border="0">
<tr align="left" bgcolor="#f5f5f5" >
<td height="20" width="205" align="center">编号</td>
<td height="20"  width="205" align="center">图书名称</td>
<td height="20"  width="205" align="center">出版时间</td>
<td height="20" align="center"  width="205" >图书定价</td>
<td height="20" align="center" width="205" >作者</td>
<td height="20" align="center" width="205" >出版社</td>
</tr>
<tr align="left" bgcolor="#fff">
<td height="20" align="center" width="205" >$info[id]</td>
<td height="20" align="center" width="205" >$info[bookname]</td>
<td height="20" align="center" width="205" >$info[issu_date]</td>
<td height="20" align="center" width="205" >$info[price]</td>
<td height="20" align="center" width="205" >$info[maker]</td>
<td height="20" align="center" width="205" >$info[publisher]</td>
</tr>
</table>
HTML;
    echo $table;
}while($info=mysqli_fetch_array($sql));