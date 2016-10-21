<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/21
 * Time: 21:43
 */
//文件上传
$html = <<<HTML
  <table width="500" border="0" style="margin: 0 auto">
     <!--上传文件的form表单-->
     <form action="" method="post" enctype="multipart/form-data">
        <tr>
           <td width="150" height="30" align="right" valign="middle">请选择上传文件：</td>
           <!--上传文件域，type的类型为file-->
           <td width="250"><input type="file" name="upfile" /></td>
           <!--提交按钮-->
           <td width="100"><input type="submit" name="submit" value="上传" /></td>
        </tr>
     </form>
  </table>
HTML;
echo $html;
//文件上传函数
//判断是否有上传文件
if(!empty($_FILES['upfile']['name'])){
//    将文件信息赋给变量$fileinfo
    $fileinfo = $_FILES['upfile'];
    //判断文件大小
    if($fileinfo['size']<1000000 && $fileinfo['size']>0) { //文件大于0小于10M
//        上传文件
        move_uploaded_file($fileinfo['tmp_name'],$fileinfo['name']);//上传后文件保持原文件名
        echo "上传成功<br>";
    }else{
        echo "上传太大或未知<br>";
    }
}