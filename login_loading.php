<?
	$email=$_POST[email];
	$password=$_POST[password];
    
	include ("connect.php");

		$result = mysql_query("select * from user where email = '$email';",$connect); /* 입력한 이메일로 조건 */
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
			{
				$truepassword = "$row[password]"; /* DB에 저장된 비밀번호를 가져옴 */
			}

		mysql_close($connect);

	if($email == "" || $password == "") /*이메일이나 비밀번호에 공백을 기입했다면*/
    {
		echo "<script>
		window.alert('이메일과 비밀번호의 공백을 확인해주세요.')
		history.go(-1)
		</script>";
	}else if($password==$truepassword) /*입력된 비밀번호가 DB에 저장된 비밀번호와 일치할 때 세션 스타트!*/
	{
		include ("connect.php");
		$result = mysql_query("select * from user where email = '$email';",$connect);
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
			{
				$num = "$row[num]";
				$email = "$row[email]";
				$nickname = "$row[nickname]";
				$password = "$row[password]";
			}
		mysql_close($connect);

		session_start();
		$_SESSION['num']=$num;
		$_SESSION['email']=$email;
		$_SESSION['nickname']=$nickname;
		echo("
		<script>
		location.href='./index.php';
		</script>
		");

	}else if($password!=$truepassword) /*비밀번호가 불일치 한다면*/
	{
		echo "<script>
		window.alert('이메일이 없거나 비밀번호가 틀렸습니다.')
		history.go(-1)
		</script>";
	}
?>
