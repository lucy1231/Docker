<meta http-equiv="Content-Type" content="text/html;  charset=euc-kr" />
<?
	$email=$_POST['email'];	/*primary key*/
	$password=$_POST['password'];
	$nickname=$_POST['nickname'];
	$pass_q=$_POST['pass_q']; /*primary key*/
	$pass_a=$_POST['pass_a'];
  
	$erorr=0;

	include ("connect.php");	

	echo "<script>alert('";

	/*받은값 공백의 확인*/
	if($email == "" || $password == "" || $nickname == "" || $pass_q == "" || $pass_a == "")
		{
			echo"공백을 확인해주세요\\n";
			$error++;
		}
	
	/*입력받은 값의 중복확인과 알림*/
	$check_email=mysql_fetch_array(mysql_query("select * from user where email = '".$email."';",$connect));
	if($check_email[email])
		{
			echo"이미 등록되어 있는 이메일입니다\\n";
			$error++; 
		}


	$check_nickname=mysql_fetch_array(mysql_query("select * from user where nickname = '".$nickname."';",$connect));
	if($check_nickname[nickname])
		{
			echo"이미 등록되어 있는 닉네임입니다\\n";
			$error++;
		}
	if($error)/*에러가 있었다면 여기서 스크립트 종료*/
		echo"'); history.go(-1) </script>";

	if(!$error)/*에러가 없었다면 실행*/
	{
		/*받은값 insert*/
		$insert=mysql_query("insert into user(email,password,nickname,pass_q,pass_a) values('$email','$password','$nickname','$pass_q','$pass_a');",$connect);
	
		if($insert)
		{
			echo"회원가입이 완료되었습니다.')</script>";
			echo"<script>window.location.replace('./login.php')</script>";
		}
		else
		{
			echo"<script>alert('중복 확인을 해주세요.');history.go(-1)</script>";
		}
	}
	mysql_close($connect);
	
?>

