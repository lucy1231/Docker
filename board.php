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

<body>

<center>

<? include("head.php"); ?>

<table border=0 width=900>
<tr><td>
<?
include ("connect.php");

$data = mysql_query("SELECT num FROM posts ORDER BY num DESC");
$num = mysql_num_rows($data); //게시글이 몇개인지 저장

$result = mysql_query("select * from posts order by num desc;",$connect);

$page = ($_GET['page'])?$_GET['page']:1;
$list = 10;
$block = 3;

$pageNum = ceil($num/$list); // 총 페이지
$blockNum = ceil($pageNum/$block); // 총 블록
$nowBlock = ceil($page/$block);

$s_page = ($nowBlock * $block) - 2;

if ($s_page <= 1) 
{
    $s_page = 1;
}

$e_page = $nowBlock*$block;

if ($pageNum <= $e_page) 
{
    $e_page = $pageNum;
}

$s_point = ($page-1) * $list;

$real_data = mysql_query("SELECT * FROM posts ORDER BY num DESC LIMIT $s_point,$list");


/*-----------글 목록 시작-----------*/	
echo"<table width=900; style='border-top:1px solid #444444; border-collapse: collapse'>";


echo"<tr>
	 <th style='border-bottom: 1px solid #444444; padding:10px'>
	 No 
	 </th>  
	 <th style='border-bottom: 1px solid #444444; padding:10px'> 
	 글쓴이 
	 </th>  
	 <th style='border-bottom: 1px solid #444444; padding:10px'> 
	 제목 
	 </th>  
	 <th style='border-bottom: 1px solid #444444; padding:10px'> 
	 최종수정 
	 </th> 
	 </tr>";

for ($i=1; $i<=$num; $i++) 
	{
		$row = mysql_fetch_array($real_data);	

		echo "<tr style='border-bottom: 1px solid #444444; padding:10px'>";
		echo "<th style='border-bottom: 1px solid #444444; padding:10px'> $row[num] </th>";
		echo "<td style='border-bottom: 1px solid #444444; padding:10px'> $row[nickname] </td>";
		echo "<td style='border-bottom: 1px solid #444444; padding:10px'> <a href='./view.php?num=$row[num]'> $row[title] </a> </td>";	/* 어떤글을 눌렀는지 알기위해 키num을 갖고 view페이지로 이동 */
		echo "<td style='border-bottom: 1px solid #444444; padding:10px'> $row[modified_date1] </td>";
		echo "</tr>";
	
		if ($row == false)
		break;
		
	}

	echo "</table>";
/*-----------글 목록 끝-----------*/
/*-----------페이지 나눔----------*/
?>
	<center>
    <a href="<?=$PHP_SELP?>?page=<?=$s_page-1?>"> 이전 </a>
<?


for ($p=$s_page; $p<=$e_page; $p++) 
{
?>
    <a href="<?=$PHP_SELP?>?page=<?=$p?>"><?=$p?></a>
<?
}


?>
    <a href="<?=$PHP_SELP?>?page=<?=$e_page+1?>"> 다음 </a>
	</center>
<?
/*------------페이지 나눔 끝-------------*/

/*글쓰기 시작*/
	session_start();
	$email=$_SESSION['email'];
	$nickname=$_SESSION['nickname'];

	echo"<center>";

	if($nickname==null)
	{
		echo'<a href="login.php"> 글쓰기 </a>';
	}

	if($nickname!=null)
	{
		echo'<a href="write.php"> 글쓰기 </a>';
	}

	echo"</center>";
/*글쓰기 끝*/
//	echo "<br>게시글은 총 ".$num."개 <br>";
//	echo "현재 페이지는".$page."<br/>";
//	echo "현재 블록은".$nowBlock."<br/>";
//
//	echo "현재 블록의 시작 페이지는".$s_page."<br/>";
//	echo "현재 블록의 끝 페이지는".$e_page."<br/>";
//
//	echo "총 페이지는".$pageNum."<br/>";
//	echo "총 블록은".$blockNum."<br/>";

	mysql_close($connect)
?>

<? include("foot.php"); ?>

</center>
</body>
</html>