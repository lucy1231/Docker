<?
	$email=$_POST[email];
	$pass_a=$_POST[pass_a];
	
	include("connect.php");
	$row=mysql_fetch_array(mysql_query("select * from user where email = '".$email."';"));
	
	if($row[pass_a] == $pass_a)
	{
		echo"<script>alert('비밀번호는 $row[password] 입니다.');history.go(-1)</script>";
	}else{
		echo"<script>alert('문제의 정답이 틀렸습니다.');history.go(-1)</script>";
	}

	mysql_close($connect);
?>