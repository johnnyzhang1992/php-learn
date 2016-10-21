<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/21
 * Time: 21:44
 */
//文件上传
$html = <<<HTML
  <p>请选择上传的文件：</p>
  <table width="300" border="0" style="background: #f0f0f0">
     <!--上传文件的form表单-->
     <form action="" method="post" enctype="multipart/form-data">
        <tr>
           <td width="50" height="30"  valign="middle">上传文件：</td>
           <!--上传文件域，type的类型为file-->
           <td width="250"><input type="file" name="u_file[]" /></td>
        </tr>
        <tr>
           <td width="50" height="30" align="right" valign="middle">上传文件：</td>
           <!--上传文件域，type的类型为file-->
           <td width="250"><input type="file" name="u_file[]" /></td>
        </tr>
        <tr>
           <td width="50" height="30" align="right" valign="middle">上传文件：</td>
           <!--上传文件域，type的类型为file-->
           <td width="250"><input type="file" name="u_file[]" /></td>
        </tr>
        <tr>  
           <!--提交按钮-->
           <td width="300"><input type="submit" name="submit" value="上传" /></td>
           <td></td>
        </tr>
     </form>
  </table>
HTML;
echo $html;
//判断变量$_FILEs[u_file][name]是否为空
if(!empty($_FILES['u_file']['name'])){
    $file_name = $_FILES['u_file']['name']; //将上传文件名另存为数组
    $file_tmp_name = $_FILES['u_file']['tmp_name']; //将上传的临时文件名另存为数组
    for($i = 0;$i<count($file_name);$i++){ //循环上传文件
        move_uploaded_file($file_tmp_name[$i],$i.$file_name[$i]); //文件重命名
        echo "文件：".$file_name[$i].'上传成功;'."更名为：".$i.$file_name[$i].'<br>';
    }
}