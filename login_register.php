<?php
	include "public.php";
	//接口实现登录和注册功能
	$status = $_GET["status"];//参数控制登录还是注册功能
	$uname = $_GET["uname"];//接收用户名
	$upwd  = $_GET["upwd"];//接收密码
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7146b9ff1b8d09daa79e8e6d93473cd38e234138
	
	if( $status == "login" ){
		//登录功能
		$sql = "select * from user where uname='$uname'";
<<<<<<< HEAD
=======
	/*$repwd =$_GET["repwd"];//接受重复密码*/

	
	if( $status == "login" ){
		//登录功能
		$sql = "select * from user where `uname`='$uname'";
>>>>>>> 2-25提交
=======
>>>>>>> 7146b9ff1b8d09daa79e8e6d93473cd38e234138
		//echo $sql;
		$res = mysql_query( $sql );
		$arr = mysql_fetch_array( $res );
		if( $arr ){ //用户名存在
			if( $upwd == $arr["upwd"] ){
				echo 1;//登录成功
			}else{
				echo 2;//密码错误
			}
		}else{
			echo 0;//用户名不存在
		}
	}else if( $status == "register" ){
		//注册功能
<<<<<<< HEAD
<<<<<<< HEAD
		$sql = "insert into user(uname,upwd) values('$uname','$upwd')";
		$row = mysql_query( $sql );
		if( $row ){
=======
		$sql = "insert into user(`uname`,`upwd`) values('$uname','$upwd')";
		$row = mysql_query( $sql );
		//echo $row;
		if( $row==1 ){
>>>>>>> 2-25提交
=======
		$sql = "insert into user(uname,upwd) values('$uname','$upwd')";
		$row = mysql_query( $sql );
		if( $row ){
>>>>>>> 7146b9ff1b8d09daa79e8e6d93473cd38e234138
			echo 1;//注册成功
		}else{
			echo 0;//注册失败
		}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7146b9ff1b8d09daa79e8e6d93473cd38e234138
	}
	
	
	//接口：http: bvvgt//www.tuling123.com/openapi/api?key=2465e182e4154777a3a02da0ccaa6c88&userid=1&info="+txt.value
<<<<<<< HEAD
=======
		
	}
	
	
	
>>>>>>> 2-25提交
=======
>>>>>>> 7146b9ff1b8d09daa79e8e6d93473cd38e234138
?>