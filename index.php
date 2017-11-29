<!doctype>
<html>
<head>

<link rel="stylesheet" type="text/css" href="./main.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge"> 
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="shortcut icon" type="image/x-icon" href="http://icons.iconarchive.com/icons/ampeross/lamond/128/minecraft-icon.png" />
<title> 프로젝트 홈페이지 </title>

</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>


<script>
$('.fun-btn').on('click', function(event) {
  $(this).toggleClass('start-fun');
  var $page = $('.page');
  $page.toggleClass('color-bg-start')
    .toggleClass('bg-animate-color');

  //change text when when button is clicked

  $(this).hasClass('start-fun') ?
    $(this).text('stop the fun') :
    $(this).text('start the fun');

});
</script>

<script>
    function fnMove(seq){
        var offset = $("#div" + seq).offset();
        $('html, body').animate({scrollTop : offset.top}, 400);
    }2017-11-03
</script>



<script type="text/javascript">

	function UpdateClock () {
		var clock = document.getElementById ("clock");
		var now = new Date ();
		clock.innerHTML = now.toLocaleTimeString ();
	}
	function Init () {
		UpdateClock ();
		setInterval (UpdateClock, 1000);
	}				
</script>

<!-- 스타일태그 -->
<? include("style.php"); ?>

<body>
<div id=box11>



<center>

<? include("head.php"); ?>

<table border=0 width=900>

<tr><td align=center>
<!--  -->
<!-- <div id=box3> 전체 메인 박스 -->

<div id=box4> <!--자바스크립트 이미지 롤링 박스  -->

<div class="cycle-slideshow"
    cycle-slideshow data-cycle-loader="wait"
	>
<img src="http://cfile24.uf.tistory.com/image/99BCCC33599FD0A137F7CC" width="900px" height="320px">
<img src="https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAgdAAAAJGY2MjZjNTI0LThjYTItNGMzMy05NmE1LTY4Y2QwNWQzOWVjMw.png" width="900px" height="320px">
<img src="https://pbs.twimg.com/media/DMYTAjvVwAAfP1N.jpg"" width="900px" height="320px">
<img src="http://cfile30.uf.tistory.com/image/2548AF3757A7FCC40D6FF1" width="900px" height="320px">
</div>


</td></tr>

<tr><td>


<table border=0>
<tr><td>
<div id=box7>
<div style="color:black; padding:40px 0px 0 0px; font-size:50px; font-weight:bold;">
<center><body onload="Init ()">
현재시간<br><span id="clock"></span></center>
	
</div>
</div> 

<!--전체 적인 로그인 박스 -->

</td><td>
<div id="login1">
<?
	if($num==null)
	{
		echo'<font size="2" color="black"><center>로그인 하세요!</center></font>
			 <a href="./login.php">'; /* 로그인 페이지와 연동 */
		echo'<center><div id="login2">
			 <font color="white" size="3">'; /* 로그인 박스 */
		echo'<center><div style="padding:12px 2px 0 6px;">ID 로그인</div></center>';
		echo'</font></a>';
		echo' <div id="login3"><font size="2"><a href="./join.php">회원가입</a></font></div>
		</div>';
	}else
	{
		echo '<div style="font-size:22px; font-weight:bold; padding: 50px 0px 0px 0px;">';
		echo "<center>".$nickname."(".$email.")님 안녕하세요!</center>";
		echo '</div>';

		echo'<div style="font-size:22px; font-weight:bold; padding: 25px 0px 0px 0px;"> 
			<a href="./logout.php"><center>로그아웃</center></a>
			</div>';
	}
?>
</div>


</div> <!-- 상단 [시간, 로그인바] 끝 -->
</div>

</td></tr>

<table border=0 width=900>
<tr><td>

<div id=box5>
<div style="padding-top:30px; font-size:40px; font-weight:bold;">홈페이지를 시작으로
</div>

<div id=box10>
<img src="../img/book.jpg" width="40px" height="40px"> README
</div>

<div style="overflow:scroll; width:900px; height:450px">
<p>

===============<br>
프로젝트 팀 Eclipse의 3인은 2017년 직업과정위탁과정을 수료함으로써 본격적으로 IT계열에 몸을 담게 되었다.<br>
수료과정중 배운내용으로 10대에 뭐라도 해보고 싶다는 생각을 시작으로 최웅탁, 신영훈, 손재원은 <br>
3인조로 팀을 만들고 여러 프로젝트를 구상 / 계획하고 협업하여 제작하기 시작했다.
<p>
그 중 첫 프로젝트가 바로 이 홈페이지 제작이다.

<div style="font-size:25px; font-weight:bold;">--개발</div>
<div style="padding: 0px 0px 10px 0px; font-weight: 100; font-size:13px;"><img src="../img/APMset.png"></div>
CentOS를 기반으로 Apache, MariaDB, php를 사용하여 웹서버를 구축하고 홈페이지를 만들었다.<br>
주로 디자인 / DB연동 / 알고리즘에 신경을 썼고, 배우는과정=제작과정으로 직결되는 특성상<br>
모든 레이아웃과 기능이 제작자의 머리를 기반으로 제작되었기 때문에 기능 하나하나에 정말 힘을 들이고 신경을 많이 썼다.<br> 

<br>
<font color='Green' size='6'><strong>디자인</strong></font>
<br>
최웅탁이 크게 기여하고 손재원이 신경써준 부분이다.<br>
부담스럽지 않으면서 눈에 띄고 부드러운 디자인을 제작하는데 심의를 기울였으며,<br>
홈페이지 제작 초기부터 마무리까지 계속 변화되었다.<br>

<br>
<font color='blue' size='6'><strong>기능</strong></font>
<br>
신영훈이 크게 기여하고 최웅탁이 신경써준 부분이다.<br>
회원가입, 로그인, 글 작성, 댓글 작성, 페이징이 대표적인 기능적인 부분이라 할 수 있으며,<br>
MariaDB로 직접 테이블을 관리하고 php구문을 모두 날코딩했기 때문에<br>
시간을 가장 많이 필요했던 부분이고 때문에 배운점 역시 많았다.
</div>

</div>

</div><!-- box5 끝 -->

</td><td>

<!-- <img src="../img/nice.jpg" width="300px" height="132px"> -->
<!-- <div style="font-weight: 100; font-size:13px;"> -->
<!-- <center> "실제 리눅스 개발자인 리누스 토르발즈" </center> -->
</div>

</td></tr>
</table>

<? include("foot.php"); ?>

</div>
</center>
</table>
</body>
</html>