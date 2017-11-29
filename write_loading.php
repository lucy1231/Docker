<meta http-equiv="Content-Type" content="text/html;  charset=euc-kr" />
<?
	session_start();
	$nickname=$_SESSION['nickname'];

	$content=$_POST[content];
	$title=$_POST[title];

	if($content==null || $title==null)
	{
		echo"<script>
				alert('제목과 본문에 내용을 써주세요!');
				history.go(-1)
			</script>";
	}else{

	$date1=date(Y).'-'.date(m).'-'.date(d);
	$date2=date(H).':'.date(i).':'.date(s);
	$modified_date1=date(Y).'-'.date(m).'-'.date(d);
	$modified_date2=date(H).':'.date(i).':'.date(s);

	include ("connect.php");

	$sql="insert into posts(nickname,title,content,date1,date2,modified_date1,modified_date2) values('$nickname','$title','$content','$date1','$date2','$modified_date1','$modified_date2');";

	$result=mysql_query($sql);


	if($result){
		echo "<script>alert('글쓰기가 완료되었습니다.')</script>";
		echo "<script>window.location.replace('./board.php')</script>";
	}
	else
	echo "<script>alert('글쓰기가 안 되었습니다.');history.go(-1)</script>";

	mysql_close($connect);
	}
?>