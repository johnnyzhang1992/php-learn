## 项目介绍
这是一个关于mysql 练习的案例。通过使用函数来实现数据库的创建，数据表的创建，
以及表内容的创建，内容填充，内容更新以及内容的删除。
>使用的函数以及一些php技术
 * mysqli_query()等函数的使用
 * $_COOKIE 和 $_SESSION 的使用
 * 数组和字符串的操作
 * 路由功能的实现
 * 类的练习
 
 ## 数据库的结构
 库名：blog
 >主要用到三个库
 * system_config
 * tb_blog
 * users
 >各个表的功能
 * 表一用来存储网站的基本信息：blog_title,blog_hoster,blog_description
 * 表二存储文章的信息：id,author,title,tag,content,status,created_time
 * 表三用来存储用的信息：id,ussername,password,email,avatar,description,created_time
 