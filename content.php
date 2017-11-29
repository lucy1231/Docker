<!doctype>
<html>
<head>

<link rel="stylesheet" type="text/css" href="./main.css">
<meta charset="UTF-8">
<title> Eclipse </title>

</head>
<body>

<div id=box1>
<center> <a href="./board.php"> ---게시글--- </a></center>
<?
	include ("connect.php");

	$result = mysql_query("select * from posts order by num desc;",$connect);
		/* 테이블 구조*/		
		echo"<table border='1px' >";

		echo"<tr> <td> No </td>  <td> 글쓴이 </td>  <td> 제목 </td>  <td> 최종수정 </td> </tr>";
	while($row = mysql_fetch_array($result, MYSQL_BOTH))
		{
			echo "<tr>";
			echo "<td> $row[num] </td>";
			echo "<td> $row[name] </td>";
			echo "<td> <a href='./view.php?num=$row[num]&name=$row[name]&title=$row[title]'> $row[title] </a> </td>";	/* view 페이지로 이동 */
			echo "<td> $row[date1] </td>";
		
			echo "</tr>";
		}
		echo "</table>";

	mysql_close($connect);
	
	if($num==null)
	{
		echo' 로그인해야 글을 쓸 수 있습니다 <a>';
	}

	if($num!=null)
	{
		echo'<a href="write1.php"> 글쓰기 <a>';
	}

?>
</div>
</body>
</html>