<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/15
 * Time: 20:58
 */
if(!is_dir('./upfile')){
    mkdir('./upfile');
}//确认/upfile 文件目录是否存在，不存在新建
array_push($_FILES["picture"]["name"],"");//向表单提交的数组中添加一个空元素
$array = array_unique($_FILES["picture"]["name"]);//删除数组中的重复元素
array_pop($array);//删除数组中最后一个单元
for($i=0;$i<count($array);$i++){
    $path = "upfile/".$_FILES["picture"]["name"][$i];//定义上传文件的储存位置
    if(move_uploaded_file($_FILES["picture"]["tmp_name"]["$i"],$path)){//执行上传操作
        $result = true;
    }else{
        $result = false;
    }
}
if($result = true){
    echo "文件上传成功,请稍等....";
}else{
    echo "文件上传失败,请稍等....";
    echo "<meta http-equiv=\"refresh\" content=\"3;url=array.php\">";
}