<?php
//开启session
session_start();
// $uname =$_GET['u_name'];
// $mobile =$_GET['mobile'];
// $pwd =$_GET['pwd'];

// 1、获取文件user.json的内容
$user_json_str = file_get_contents('user.json');

// 2、旧的用户信息一个数组，一旦注册新的用户，
// 2.1、把json字符串转换为数组
// 2.2、json_decode(json字符串,boolean)
// 	默认是把值转换成的是对象
// 	第二个参数设置为true，才是数组

$user_a = json_decode($user_json_str,true);

// 3、就往数组添加一条记录

$user_a[] = $_GET;

// 4、往文件存放的时候，把这一个用户信息数组全部扔进去

// 问题三、手机号码不能重复
file_put_contents('user.json', json_encode($user_a) );

$_SESSION['uname']=$uname;
echo 1;
?>      