<?
	$num=$_GET[num];

	include ("connect.php");

	$row_of_post=mysql_fetch_array(mysql_query("select * from posts where num = '$num';",$connect));
	$nickname_post=$row_of_post[nickname];/*글쓴이의 닉네임*/
	

	session_start();
	$nickname_user=$_SESSION['nickname'];/*접속한 유저의 닉네임*/
	
	if($nickname_post != $nickname_user)
	{
		echo "<script>
		window.alert('작성자가 아닙니다!.')
		history.go(-1)
		</script>";
	}
	else
	{
		include ("connect.php");

		mysql_query("delete from posts where num = '$num';",$connect);
		mysql_query("delete from ripple where num = '$num';",$connect);

		mysql_close($connect);

		echo("
			<script>
			location.href='./board.php';
			</script>
			");
	}
?>