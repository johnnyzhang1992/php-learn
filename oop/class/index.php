<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2016/10/21
 * Time: 22:38
 */
//类
//成员方法
class SportObject{
    function beatBastball($name,$height,$avoirdupois,$age,$sex){ //声明成员方法
        echo "姓名：".$name.";<br>";
        echo "体重：".$avoirdupois.";<br>";
        echo "年龄：".$age.";<br>";
        echo "性别：".$sex.";<br>";
        if($height>180 and $avoirdupois<100){
            return $name.",符合打篮球的要求！<br>"; //方法的实现
        }else{
            return $name.",不符合打篮球的要求!<br>"; //方法的实现
        }
    }
}
$sport = new SportObject();
echo $sport->beatBastball('明日','185','80','20','男');
//成员变量
class SportObject1{
    public  $name;  //定义成员变量
    public  $height;
    public  $avoirdupois;
    function bootFootball($name,$height,$avoirdupois){ //声明成员方法
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois =$avoirdupois;
        echo "姓名：".$this->name.";<br>";
        echo "身高：".$this->height.";<br>";
        echo "体重：".$this->avoirdupois.";<br>";
        if($this->height<180 && $this->avoirdupois<85){
            return $this->name.":符合踢足球的要求！<br>"; //方法实现的功能
        }else{
            return $this->name.":不符合踢足球的要求！<br>"; //方法实现的功能
        }
    }
}
$sport1 = new SportObject1(); //实例化类，并传递参数
echo $sport1->bootFootball('Mike','185','80'); //执行类中的方法

//类常量
class BookObject{
    const BOOK_TYPE = '计算机图书'; //声明常量
    public $object_name; //声明变量，用于存放商品名称
    function setObjectName($name){ //声明方法
        $this->object_name = $name; //设置成员变量值
    }
    function getObjectName(){ //声明方法
        return$this->object_name;
    }
}
$book = new BookObject(); //实例化对象
$book->setObjectName('PHP类'); //调用方法 setObjectName()
echo BookObject::BOOK_TYPE."->"; //输出常量 BOOK_TYPE
echo $book->getObjectName().'<br>'; //调用方法 getObjectName()

//构造方法
class SportObject2{
    public  $name;  //定义成员变量
    public  $height;
    public  $avoirdupois;
    public  $age;
    public  $sex;
    public function __construct($name,$height,$avoirdupois,$age,$sex){ //定义构造方法
        $this->name = $name; //为成员变量赋值
        $this->height = $height;
        $this->avoirdupois = $avoirdupois;
        $this->age = $age;
        $this->sex = $sex;
    }
    function bootFootball(){ //声明成员方法
        if($this->height<180 && $this->avoirdupois<85){
            return $this->name.":符合踢足球的要求！<br>"; //方法实现的功能
        }else{
            return $this->name.":不符合踢足球的要求！<br>"; //方法实现的功能
        }
    }
}
$sport2 = new SportObject2('Mike','185','80','21','男'); //实例化类，并传递参数
echo $sport2->bootFootball(); //执行类中的方法

//析构方法
class SportObject3{
    public  $name;  //定义成员变量
    public  $height;
    public  $avoirdupois;
    public  $age;
    public  $sex;
    public function __construct($name,$height,$avoirdupois,$age,$sex){ //定义构造方法
        $this->name = $name; //为成员变量赋值
        $this->height = $height;
        $this->avoirdupois = $avoirdupois;
        $this->age = $age;
        $this->sex = $sex;
    }
    function bootFootball(){ //声明成员方法
        if($this->height<180 && $this->avoirdupois<85){
            return $this->name.":符合踢足球的要求！<br>"; //方法实现的功能
        }else{
            return $this->name.":不符合踢足球的要求！<br>"; //方法实现的功能
        }
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br><p><b>对象被销毁，调用析构函数</b></p>";
    }
}
$sport3 = new SportObject3('Lee','185','80','21','男'); //实例化类，并传递参数
//echo $sport3->bootFootball(); //执行类中的方法
//unset($sport3)

//继承

//父类
class SportObject4{
    public  $name;  //定义成员变量
    public  $avoirdupois;
    public  $age;
    public  $sex;
    public function __construct($name,$height,$avoirdupois,$age,$sex){ //定义构造方法
        $this->name = $name; //为成员变量赋值
        $this->height = $height;
        $this->avoirdupois = $avoirdupois;
        $this->age = $age;
        $this->sex = $sex;
    }
    function showMe(){ //在父类中定义方法
        echo '这句话不会显示。';
    }
}
//子类 BeatBasketBall
class BeatBasketBall extends SportObject4{ //定义子类，继承父类
    public $height;
    function __construct($name, $height) //定义构造方法
    {
        $this->height = $height; //为成员变量赋值
        $this->name = $name;
    }
    function showMe(){ //定义方法
        if($this->height>185){
            return $this->name.",符合打篮球的要求！"; //方法的实现
        }else{
            return $this->name.",不符合打篮球的要求！";
        }
    }
}
//子类 WeightLifting
class WeightLifting extends SportObject4{ //定义子类，继承父类
    function showMe()
    {
       if($this->avoirdupois<85){
           return $this->name.",符合举重的要求！";
       }
       else{
           return $this->name.",不符合举重的要求";
       }
    }
}
//实例化对象
$beatbasketball = new BeatBasketBall('科技','190'); //实例化子类
$weightlifting = new WeightLifting('John','185','80','20','男');
echo $beatbasketball->showMe().'<br>'; //输出结果
echo $weightlifting->showMe().'<br>';

//多态
class C{
    function __call($name, $num) // 调用不存在的方法
    {
        echo "<br>方法名称：".$name.'<p>'; //输出方法名
        echo "参数存在的个数".count($num).'<p>';//输出参数的个数
        if(count($num) == 1){ //根据参数的不同调用不同的方法
            echo @$this->list1($a);
        }
        if(count($num) == 2){
            echo @$this->list2($c,$b);
        }
        // TODO: Implement __call() method.
    }
    public function list1($a){ //定义方法
        return "这是list1函数";
    }
    public  function list2($c,$b){
        return "这是list2函数";
    }
}
$a = new C; //类的实例化
$a->listshow(1,2); //调用方法，传递参数

//$this-> 和 ：： 的使用

//$this->
class example{  //创建类 example
    function exam(){  //创建成员方法
        if(isset($this)){  //判断变量$this 是否存在
            echo "<p>\$this的值是:".get_class($this);  //如果存在，输出$this 所属类的名字
        }else{
            echo "<p>\$this 未定义"; //如果不存在，
        }
    }
}
$class_name = new example(); //实例化对象$class_name
$class_name->exam(); //调用方法
//get_class()函数返回对象所属类的名字，如果不是对象，则返回false

//操作符 ::
class Book{ //创建类
    const NAME = 'computer'; //常量
    function __construct(){ //构造方法
        echo '<p>本月图书冠军为：'.Book::NAME; //输出默认值
    }
}
class I_book extends Book{ //Book的子类
    const NAME = 'foreign language'; //声明常量
    function __construct(){  //子类的构造方法
        parent::__construct(); //调用父类的构造方法
        echo '<p>本月图书冠军为：'.self::NAME; //输出本类的默认值
    }
}
$obj = new I_book(); //实例化对象