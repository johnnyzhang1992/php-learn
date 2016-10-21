<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/21
 * Time: 20:56
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
//处理表单返回数据
//if(!empty($_FILES)){  //判断变量是否为空
//    foreach ($_FILES['upfile'] as $name => $value){  //使用foreach循环输出上传文件信息的名称和值
//        echo $name.'='.$value.'<br>';
//    }
//}


//多文件上传