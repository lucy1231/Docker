<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>로그인 창</title>
  <link rel="shortcut icon" type="image/x-icon" href="http://icons.iconarchive.com/icons/ampeross/lamond/128/minecraft-icon.png" />
 </head>

<style>
#box1{
  position: relative;

  width: 495px;
  height: 470px;
  margin-top: 85px;
    border: 1px solid black;
  background-color: white;
}
#box2{
  position: relative;

  margin-top: 50px;
}

#box3{
  position: relative;

  width: 390px;
  height: 60px;
  margin-top: 25px;
  border-bottom : 1px solid black;
  background-color: #white;
}


#box4{
  position: relative;

  width: 420px;
  height: 50px;
  margin-top: 25px;
  border: 1px solid black;
  border-radius:10px;
  background-color: #ff6000;
}

body{
background-image:url('');
background-repeat:no-repeat;
background-size: 800px 800px;
background-position: -5% -120%;
background-color: white;
margin-top: 200px;
}

 a:link { color: red; text-decoration: none;}
 a:visited { color: black; text-decoration: none;}
 a:hover { color: blue; text-decoration: underline;}

body {background-image:url('/img/background.jpg'); background-size: 2000px 800px;}



</style>

<!-- 위 로그인 이미지 -->
<body>


<center>
<div id=box2>

<!--<img src="https://d2h5doj4xlbun0.cloudfront.net/member-0.0.649/images/member/stove_ci_member.png">-->
</div>

<!-- 아이디, 비밀번호 입력창 -->
<div id=box1>

<form name="login" method="POST" action="login_loading.php">
<br>

<div id=box3>
<font><input placeholder="E-mail" style="border:none; width:388px; height:57px;" type="text" name="email"> 
</div>

<br>
<br>

<div id=box3>
	<input placeholder="비밀번호" style="border:none; width:388px; height:57px;" type="password" name="password">
</div>
 
<br>
<br>
<br>
 
<p>
<div style="font-weight: bold ;"><font size="4" color="black"  > 
<input type="submit" value="로그인" style="width:390px; height:50px; background-color:#00bff3;"/>  
</font>

</p>

</div>
</a>

 



<br>
---------------------------------
<font size="2" color="black"  > 또는 </font>
---------------------------------
</br>
<p>
<font size="2" color="black"  > 
<a href="./find_email.php" style="text-decoration:none"> 이메일 조회</a>
|<a href="./find_pw.php" style="text-decoration:none"> 비밀번호 찾기</a> 
|<a href="./join.php" style="text-decoration:none"> 회원가입</a></font>





 </div>
<!--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgAkfJU_S6GGAUq4Im8E1zCxnHdmOZo7RWNVFzy83mM0qwlRGSMw">-->

  </center>

 </body>
</html>