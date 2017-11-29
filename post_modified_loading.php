<?
	/*글의 고유번호와 수정된 내용 가져옴*/
	$num=$_POST[num];
	$after_title=$_POST[title];
	$after_content=$_POST[content];

	include ("connect.php");

	/*최종 수정일을 변경하기위한 변수*/
	$modified_date1=date(Y).'-'.date(m).'-'.date(d);
	$modified_date2=date(H).':'.date(i).':'.date(s);
	
	/*수정된 제목과 내용을 저장*/
	mysql_query("update posts set title = '$after_title' where num ='$num';",$connect); 
	mysql_query("update posts set content = '$after_content' where num = '$num';",$connect);

	mysql_query("update posts set modified_date1 = '$modified_date1' where num='$num';",$connect);
	mysql_query("update posts set modified_date2 = '$modified_date2' where num='$num';",$connect);

	echo "<script>alert('글 수정 되었습니다.');</script>";
	echo "<script>window.location.replace('./view.php?num=".$num."')</script>";

	mysql_close($connect);
	
?>