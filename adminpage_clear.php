<?
	/*페이지 접속시 모든 유저 / 게시글 / 댓글 삭제 후 auto_increment=1*/
	include "connect.php";

	mysql_query("delete from user where num >= 1;",$connect);
	mysql_query("alter table user auto_increment = 1;",$connect);

	mysql_query("delete from posts where num >= 1;",$connect);
	mysql_query("alter table posts auto_increment = 1;",$connect);
	
	mysql_query("delete from ripple where num >= 1;",$connect);
	mysql_query("alter table ripple auto_increment = 1;",$connect);

	mysql_close($connect);
?>