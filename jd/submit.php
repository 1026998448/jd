<?php
@ $username=$_REQUEST['username'] or die('你的用户名没有填写'); 
@ $userpw=$_REQUEST['userpw'] or die('你的密码没有填写'); 
@ $telephone=$_REQUEST['telephone'] or die('你的电话号码没有填写'); 
@ $email=$_REQUEST['email'] or die('你的email没有填写'); 

//开始连接数据库
$con=mysqli_connect('127.0.0.1','root','','jd',3306);

$sql="SET NAMES UTF8";
mysqli_query($con,$sql);
$sql="INSERT INTO userinfo VALUES(NULL,'$username','$userpw','$telephone','$email')";
$result=mysqli_query($con,$sql);

if($result===false){
	echo '<script type="text/javascript">
             alert("注册失败");
	     </script>';
}
else{
	echo '<script type="text/javascript">
            if(confirm("亲,你以注册成功,快去登录吧")){
               window.location.href="login.html";
            }
            else{
            	 window.location.href="signin.html";
            }
	     </script>';
}
?>