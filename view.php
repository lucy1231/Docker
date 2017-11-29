<!doctype>
<html>
<head>

<link rel="stylesheet" type="text/css" href="./main.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge"> 
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="shortcut icon" type="image/x-icon" href="http://icons.iconarchive.com/icons/ampeross/lamond/128/minecraft-icon.png" />
<title> 게시판 </title>


<!-- 스타일태그 -->
<? include("style.php"); ?>

<style>

#box2{
	width:80px;
	height: 30px;
	border-radius: 5px;
	background-color: #00FF00;
}

input {
  border: 1px solid black;
  border-radius: 3px;
  background-color: white;
    -webkit-appearance: none;
  width: 125px;
  height: 25px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

table {
border:1px;
}

</style>


</head>
<body>

<center>
<? include("head.php"); ?>

<?
	$num=$_GET[num];/*board.php에서 누른 글을 띄우기 위해 키를 가져옴*/

	$date = date("Y-m-d",time()); /*댓글의 날짜를 저장하기위함*/

	include ("connect.php");

	$result=mysql_query("select * from posts;",$connect);
	$posts_row=mysql_fetch_array(mysql_query("select * from posts where num = '$num';",$connect));
	$content=$posts_row[content];
?>

<center>
<table border=1; width=875; style='margin-top:25; margin-bottom:50'>
<tr>
<td>

 <?
	echo "<center>";
	echo "<table border=1px; width=800; style='margin-bottom:25'>";
	echo "<tr> <td> 글쓴이 : $posts_row[nickname] </td> <br>";
	$writer=$posts_row[nickname];
	echo "<td> 제목 : $posts_row[title] </td> <br>";
	echo "<td> 글 등록일 : $posts_row[date1] / $posts_row[date2] </td> <br>"; 
	echo "<td> 최종 수정일 : $posts_row[modified_date1] / $posts_row[modified_date2] </td> </tr></table>";
	echo "</center>";

	echo "<center><table border=1; width=90%; bgcolor=white> <tr> <td> $posts_row[content] </td> </tr> </table></center>";
	/*---이하는 댓글 구현---*/
	
	/*댓글 삭제를 눌렀다면 그 댓글을 삭제*/
	session_start();
	$nickname=$_SESSION['nickname'];

	$coment=$_POST[coment];
	$key_no=$_GET[key_no];
	$nickname_ripple=$_GET[nickname_ripple];
	
	if($key_no != null && $nickname == $nickname_ripple)
	{
		mysql_query("delete from ripple where key_no = ".$key_no.";",$connect);
	}elseif($key_no != null)
	{	
		if($nickname != $nickname_ripple)
			echo"<script> alert('댓글 작성자가 아닙니다.'); history(-1)</script>";
	}

	if($coment!=NULL)
	{
		/*DB에 댓글 저장*/
		$sql="insert into ripple(num,nickname,content,date) values('$num','$nickname','$coment','$date');";
		$result=mysql_query($sql) or die(mysql_error($connect));
	}
		/*----댓글 목록 불러오기----*/
		$result = mysql_query("select * from ripple where num = '$num';",$connect);
			echo "<center><table border='1px'; width=850 style='margin-top:25;'>";
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
			{
				echo "<tr>";
				echo "<td nowrap width='10%'> $row[nickname] </td>";
				echo "<td style='word-break:break-all'> $row[content] </td>";
				echo "<td nowrap> $row[date] </td>";
				echo "
					<td><a href='./view.php?num=".$num."&nickname_ripple=".$row[nickname]."&key_no=".$row[key_no]."'> 
					댓글삭제 </a></td>";/*각각의 변수는 /글을 유지시키기 위해/댓글작성자와 현재접속자가 맞는지 판단하기위해/무슨댓글을 삭제할것인지/에 기능한다 */
				echo "</tr>";
			}
			echo "</table></center>";
	
	/*댓글이 끝나고 로그인 / 글수정 / 글삭제 / 게시판으로*/
	echo"<center><table border=0; style='margin-top:10; margin-bottom:10;'>
		 <tr>";
	
	/*댓글달기를 누르면 쓴 댓글을 자신에게 form문으로 보냄*/
	if($nickname==null)
	{
		echo'<td>
			<center>
			<div id=box2>
			<a href="./login.php"> 
			로그인
			</a>
			</div>
			</center>
			</td>';
	}

	if($nickname!=null)
	{
	echo'
	<td>
	<form name="ripple" method="POST" action="view.php?num='.$num.'&nickname='.$nickname.'&title='.$title.'">
	<input placeholder="댓글 달기"  type="text" name="coment">
	<input type="submit" value="댓글달기"/>	
	</form>
	</td>
	';		
	}

	echo"</tr><tr>";

	/*board로 링크*/
	echo"<td>
	<center>
		<div id=box2>
		<a href=./board.php> 
		게시판으로
		</a>
		</div>
		</center>
		</td>";
	
if($nickname==$writer)/*글쓴이만 볼 수 있는 수정/삭제 버튼표시*/
{
	echo"</tr><tr>";
	
	/*글 수정 페이지로 링크 (글쓴이만 볼 수 있다)*/
	echo"<td>
		<center>
		<div id=box2>
		<a href=./post_modified.php?num=".$num.">글 수정
		</a>
		</div>
		</center>
		</td>";
	

	echo"</tr><tr>";

	/*글 삭제 페이지로 링크 (글쓴이만 볼 수 있다)*/
	echo"<td>
		<center>
		<div id=box2>
		<a href=./delete_post.php?num=".$num.">
		글 삭제
		</a>
		</div>
		</center>
		</td>";
}	

	echo"</tr></table></center>";

	mysql_query("delete from ripple where key_no = '$num';",$connect);

//	echo"$nickname / $nickname_ripple";
	mysql_close($connect);
 ?>

</td>
</tr>
</table>


</center>

</body>
</html>