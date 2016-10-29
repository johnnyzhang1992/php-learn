<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/29
 * Time: 22:42
 */
//获取表单提交的数据

class ChkInput{ //定义chkinput 类
    var $name; //定义成员变量
    var $pwd;

    function checkipput($name,$pwd){ // 定义方法，完成用户注册
        $this->name = $name;
        $this->pwd = $pwd;
        echo $name.'<br>'.$pwd;
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,'test11') or die ('数据库访问错误'.mysqli_errno($conn));
        mysqli_query($conn,"SET AUTOCOMMIT=1");
        mysqli_query($conn,"set names utf8_general_ci");
        $info = "INSERT INTO  tb_user (user,password) VALUES ('$name','$pwd')";
        if(mysqli_query($conn,$info)){ //如果添加操作的返回结果，给出提示信息
            $_SESSION['admin_name'] = $name; //注册成功后，将用户名赋给SESSION变量
            mysqli_close($conn);
            echo "<script>alert('恭喜您，注册成功！');window.location.href='index.php'</script>";

        }else {
            echo "<script>alert('会员注册失败！');history.back()</script>";
            mysqli_close($conn);

        }
    }

}
$obj = new ChkInput(); //实例化类
$obj ->checkipput(trim($_POST['username']),trim(md5($_POST['password'])));//返回对象调用方法执行注册操作