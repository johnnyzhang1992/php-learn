<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/15
 * Time: 19:59
 */
$array = array(
    'baidu'  => 'www.baidu.com',
    'google' => 'www.google.com',
    'amazon' => 'www.z.com'
);
echo print_r($array);
echo '<br>';
foreach ( $array as $key=>$link){
    echo $key."=>".$link."<br>";
};
echo '<br>';
//$html = <<<HTML
//    <form name="form" method="post" style="width: 400px;">
//    <div class="name">
//    <label for="name" style="width: 70px;display: inline-block">用户名：</label>
//    <input id="name" name="user" type="text" style="200px">
//    </div>
//     <div class="pwd">
//    <label for="pwd" style="width: 70px;display: inline-block">密码：</label>
//    <input id="pwd" name="pwd" type="password" style="200px">
//    </div>
//    <div>
//    <input type="submit" name="submit" value="登录">
//    </div>
//
//    </form>
//HTML;
//
//echo $html;
//while(list($name,$value) = each($_POST)){
//    if($name != "submit"){
//        echo "$name=$value<br>";
//    }
//}
//运用数组函数---实现多文件上传
$html = <<<HTML
    <form action="index_ok.php" method="post" enctype="multipart/form-data" name="form1">
        <div class="picture">
            <label for="picture[]" style="width: 70px;display: inline-block">内容1：</label>
            <input id="picture[]" name="picture[]" type="file" style="width: 200px" size="30">
        </div>
        <div class="picture">
            <label for="picture[]" style="width: 70px;display: inline-block">内容2：</label>
            <input id="picture[]" name="picture[]" type="file" style="width: 200px" size="30">
        </div>
           <div class="picture">
            <label for="picture[]" style="width: 70px;display: inline-block">内容3：</label>
            <input id="picture[]" name="picture[]" type="file" style="width: 200px" size="30">
        </div>
        <div class="picture">
            <label for="picture[]" style="width: 70px;display: inline-block">内容4：</label>
            <input id="picture[]" name="picture[]" type="file" style="width: 200px" size="30">
        </div>
        <div class="picture">
            <label for="picture[]" style="width: 70px;display: inline-block">内容5：</label>
            <input id="picture[]" name="picture[]" type="file" style="width: 200px" size="30">
        </div>
        <div>
            <input type="image" name="imageField" src="">
        </div>
    
    </form>

HTML;
echo $html;