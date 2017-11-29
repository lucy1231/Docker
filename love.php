<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <SCRIPT LANGUAGE="JavaScript"> 
function CaricaFoto(img){ 
foto1= new Image(); 
foto1.src=(img); 
Controlla(img); 
} 
function Controlla(img){ 
if((foto1.width!=0)&&(foto1.height!=0)){ 
viewFoto(img); 
} 
else{ 
funzione="Controlla('"+img+"')"; 
intervallo=setTimeout(funzione,20); 
} 
} 

function viewFoto(img){ 
largh=foto1.width+20; 
altez=foto1.height+20; 
stringa="width="+largh+",height="+altez; 
finestra=window.open(img,"",stringa); 
} 

</script> 


 <style>
 #box1{
 width:40%;
 border-bottom: 1px solid black;
 }

</style>
  <body>
 <center>
 <font color="black" size="8">프로젝트 홈페이지 제작과정</font><br><br>
===========================================================================

 <h2>1.전체 div 와 table 로 틀잡기 <!-- 1번 목차--></h2>

 <td><img src="../img/1.jpg" width="700px" height="500px"><br></td>
 <br>
<font color="black" size="4" face="Arial">
 전체적인 구조를 div 와 table 을 이용하여 만들었다.<br>
 1번의 상단 메뉴바 2번의 시간을 나타내주는 시계 <br>
 3번의 로그인 박스 4번의 박스 까지 기본적인 틀을 잡고 시작.<br>
 </font>
 <!-- 1번 목차 끝-->
===========================================================================


 <h1>2.박스안에 각종 기능들 담기 <!-- 2번 목차--><br></h1>
<font color="black" size="4" face="Arial">
 전체적인 구조를 잡은후 각 div 박스에 표현하고 싶은 기능들을 구현했다<br><br>

 <strong><u>첫째로 구현한 기능은 자바스크립트를 이용한 이미지 롤링</u></strong> <!-- 첫번째 구현 --><br>
 </font>
 <img src="../img/3.gif"><br>
 <font color="black" size="4" face="Arial">이렇게 자바스크립트를 이용하여 이미지가 자동으로 넘어가도록 만들었다</font><br>
<!--  <img src="../img/5.jpg" width="1000px" height="300px"><br> -->

<A HREF="javascript:CaricaFoto('../img/5.jpg')" BORDER="0"><font size="4" color="">*이미지 롤링 코드 보기*</font></A> <br>
 <!--  코드 분석 설명 추가 -->
 <br>
 <div id=box1>
 </div>




 
 <br>
 <br>
 <br>
<!--  <font color="black" size="4"> -->
<!--  또한 이 이미지 롤링 스크립트를 활용한 ! 다른 방식의 롤링도 만들었다<br> -->
<!--  <img src=""> -->
<!--  이렇게 양쪽에 버튼을 배치해두고 클릭하면 넘어가도록 <br> -->
<!--  이미지가 끝이나도 처음 이미지로 다시 돌아가도록 만들어주는 형식<br> -->
<!--  <img src=""> -->
<!--  이 방식도 위 자바스크립트와 크게 다르지 않아서 <br> -->
<!--  쉽게 만들수있었다.<br> -->
<!--  </font> -->
 <!--  코드 분석 설명 추가 -->





 <font color="black" size="4" face="Arial">
 <strong><u>두번째로는 버튼의 표현</u></strong> <!-- 두번째 구현 --><br><br>
 그냥 버튼을 두고 클릭하는건 재미가없을꺼같아 css와 스크립트를 이용해<br>
 신나는(?) 버튼을 구현했다 버튼마다 따로 따로 스타일을 적용시켜주는게 어려웠지만<br>
 굳이 그렇게 해줄필요는 없었기 때문에 묻어가는 느낌으로... 넣지않았다!<br><br>

 <img src="../img/4.gif"><br>
 <strong>이런식으로 버튼이 바운스♫ 바운스♫ 한다</strong><br>
 <A HREF="javascript:CaricaFoto('../img/6.jpg')" BORDER="0"><font size="4" color="" face="Arial">*버튼 스타일 코드 보기1*</font></A> <br>
 <A HREF="javascript:CaricaFoto('../img/7.jpg')" BORDER="0"><font size="4" color="" face="Arial">*버튼 스타일 코드 보기2*</font></A> <br><br><br>

 </font>
  <br>
 <div id=box1>
 </div>
<br>
 <!--  코드 분석 설명 추가 -->




 

 
 <!-- END -->

<font color="black" size="4" face="Arial">
 <strong><u>세번째로 표현한 기능은 상단 바에있는 깜박이는 글자</u> </strong><!-- 세번째 구현 --><br><br>
 이기능은 구글에서 찾아보다가 상당히 멋있는거같아서 가져왔는데<br>
 은근히 코드가 어렵지 않다는점에서 놀랐다 <br><br>
 <img src="../img/8.gif"><br>
 <A HREF="javascript:CaricaFoto('../img/9.jpg')" BORDER="0"><font size="4" color="" face="Arial">*깜박이는 글자 코드 보기*</font></A> <br>
 일정 부분 글자만 빼고 깜박이는 기능인데 <br>
 코드를 보면 생각보다 구현하기 힘든 기능은 아니라는것을 알수있다<br><br><br>
 </font>
  <br>
 <div id=box1>
 </div>

<!--  코드 분석 설명 추가 -->




 

<!-- END -->
 
<!--  <img src=""> -->
<!--  <font color="black" size="4"> -->
<!--  <strong>마지막으로 표현한 기능은 현재 시간을 나타 내주는 기능!</strong><br> -->
<!--  자동으로 현재 시간, 분, 초 를 표현해준다 <br> -->
<!--  단점이있다면 이 코드가 span 코드를 쓰는데 <br> -->
<!--  id를 줬음에도 불과하고 위의 세번째 기능과 같이 깜박인다는 점<br> -->
<!--  그런데 같이 깜박여도 은근히 이뻐서 그냥 놔뒀다 <br> -->
<!--  <img src=""> -->
<!--  *시간을 나타내주는 코드*<br> -->
<!--  </font> -->
<!--  코드 분석 설명 추가 -->




 

<!-- END -->

<h1>3.로그인, 회원가입, 게시판, 아이디 찾기, 비밀번호 찾기 구현하기</h1><br>

<font color="black" size="4" face="Arial">
<strong><u>3번의 로그인 박스를 시작으로 로그인 회원가입 게시판 아이디 찾기 비밀번호 찾기를 구현했다</u></strong><br><br>
기본적인 기능은 입력 받은값이 우리의 서버에 MySQL에 값이 저장되고 <br>
사용자가 나중에 입력했을때 그 값을 불러오거나 다시 보내는 역활로<br>
회원가입 로그인 게시판 기능을 구현했고 아이디 찾기와 비밀번호 찾기는 입력 값과 MySQL에 저장된 값을 비교함으로서 만들었다<br><br><br>
</font>

<!-- 앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍앍-->

<img src="../img/10.PNG">
<br>
<br>
로그인을 해서 세션을 시작하기 위해서
회원가입으로 db에 정보를 넣는다

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/13.PNG')" BORDER="0"><font size="4" color="" face="Arial"></font></A> <br>
<br>
<br>

<img src="../img/11.PNG"><br>
이메일에 맞는 패스워드를 기입했다면 세션이 시작되고 index로 돌아간다

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/14.PNG')" BORDER="0"><font size="4" color="" face="Arial">*로그인 코드*</font></A> <br>
<br>
<br>

<img src="../img/12.PNG"><br>
성공적으로 로그인이 되어 사용자의 정보를 표시하며 환영을 해준다

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/15.PNG')" BORDER="0"><font size="4" color="" face="Arial">*로그인 후의 상태*</font></A> <br>
<br>
<br>


<!-- 로그인 누구누구 END-->

<!-- 아이디 찾기와 비밀번호 찾기 코드 보여주면서 설명-->
<img src="../img/16.PNG"><br>
이메일을 넣으면 DB를 조회해서 가입여부를 알려준다

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/17.PNG')" BORDER="0"><font size="4" color="" face="Arial">*이메일 조회*</font></A> <br>
<br>
<br>

<!--아이디 비번 찾기 END-->

<img src="../img/18.PNG"><br> 
가입시 기입했던 질문에 상응하는 답을 기입하면 비밀번호를 알려준다.


<br>
<br>
<A HREF="javascript:CaricaFoto('../img/19.PNG')" BORDER="0"><font size="4" color="" face="Arial">*패스워드 찾기*</font></A> <br>
<br>
<br>



<!-- 게시판 기능적인 측면과 코드 설명-->

<img src="../img/20.PNG"><br>
글을 쓸수있다

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/21.PNG')" BORDER="0"><font size="4" color="" face="Arial">*form문으로 내용 보내기*</font></A> <br>
<br>
<br>

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/22.PNG')" BORDER="0"><font size="4" color="" face="Arial">*DB에 작성글 저장*</font></A> <br>
<br>
<br>


코드를 보면 알겠지만 글쓸때 로그인한 사용자의 정보의 일부를 저장하여 글쓴이의 정보로서 기능한다

<br>
<br>
<img src="../img/23.PNG"><br>

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/29.PNG')" BORDER="0"><font size="4" color="" face="Arial">*게시글 목록 호출*</font></A> <br>
<br>
<br>



<br>
<br>
<A HREF="javascript:CaricaFoto('../img/28.PNG')" BORDER="0"><font size="4" color="" face="Arial">*페이징 코드 일부*</font></A> <br>
<br>


보드에서 글의 제목까지 나온다. 페이징이 구현되어있으나 글이 적기때문에 아직 의미가 없다
글의 제목을 누르면 그 글로 이동해야 하기 때문에 글을 누르면 그 글의 고유 넘버를 가지고 view페이지로 넘어간다

<br>
<br>

<img src="../img/24.PNG"><br>
고유넘버를 가진 제목을 눌러서 이동한 view페이지에서는 다시 고유번호로 글의 정보를 가져온다.

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/30.PNG')" BORDER="0"><font size="4" color="" face="Arial">*작성글 출력*</font></A> <br>

<A HREF="javascript:CaricaFoto('../img/31.PNG')" BORDER="0"><font size="4" color="" face="Arial">*댓글 구현*</font></A> <br>
<br>
<br>

<img src="../img/25.PNG"><br>
로그인을 해야만 댓글을 쓸수있다

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/32.PNG')" BORDER="0"><font size="4" color="" face="Arial">*댓글 작성*</font></A> <br>
<br>
<br>

<img src="../img/26.PNG"><br>
작성자 본인의 경우 글의 수정이나 삭제가 가능하다

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/33.PNG')" BORDER="0"><font size="4" color="" face="Arial">*글수정 / 글삭제*</font></A> <br>
<br>
<br>

<img src="../img/27.PNG"><br>
글 수정페이지

수정페이지일부

<br>
<br>
<A HREF="javascript:CaricaFoto('../img/34.PNG')" BORDER="0"><font size="4" color="" face="Arial">*글 수정*</font></A> <br>
<br>
<br>


<br><br><br>
<!-- 게시판 설명충 끝 END-->




<font color="black" size="4" face="Arial">
보통 인터넷에서 기본적인 게시판 틀 아니면 로그인 폼 같은것들을 구할수있었지만<br>
우리 조원인 신영훈씨가 친히 모두 직접 제작했다 덕분에 제작기간이 늘어나기는 했지만<br>
그만큼 공부할수있었고 알아가는것도 많았던거같다.<br>
</font>

<!-- 3번 홈페이지 기능적 측면 설명 END-->


<h1>4. 이번 홈페이지를 제작하면서 느낀점. <!-- 4번 마지막 후기--></h1><br>

<font color="black" size="4" face="Arial">
<strong>최웅탁</strong> (프로젝트 페이지 총 디자인 담당)<br>
===============================================<br>

솔찍히 이번 홈페이지를 제작하면서 느낀점은 무에서 유를 만든다는게 참 힘들다 라는걸 다시한번 느낀겁니다<br>
홈페이지 php 파일을 만들고 처음에 백지 상태일때 뭐부터 해야할지 막막했을때... <br>
그래도 하나하나 기능들을 추가시키면서 윤곽이 잡혀갈때는 정말로 뿌듯하더라구요 <br>
div 포지션으로 팀원들을 많이 괴롭혔고(?) 버튼 스타일이 겹친다던지 어떤식으로 만들어 갈까 고민도 했지만<br>
그래도 하나씩 만들어가면서 자바스크립트, css, html, php 등 배워가는게 많았고 <br>
이런 경험또한 필요한것이라고 생각하기 때문에 좋은 경험을 했던거 같아요^^. <br>
</font>
<br><br><br><br><br>

<font color="black" size="4" face="Arial">
<strong>신영훈</strong> (게시판 제작 및 DB 담당)
===============================================<br>
<br>
오픈소스들을 가져와서 이해만 하고 사용해도 문제는 없으나 <br>
개인적인 욕심때문에 처음부터 끝까지 내 손에서 우러나온 코드를 짜고 싶어서<br>
너무 시간을 지체 해버렸습니다.<br>
10개 넘는 파일을 계속 비슷한 알고리즘으로 짜다보니 노하우가 생기는것 같기도하고...<br>
배우면서 하는데다가 조원들과 협동해서 하기까지 하니 처음에는 혼란스러웠습니다.<br>
작업하다가 서버 이전도 하고 첫 프로젝트부터 배운게 참 많은것 같네요<br>
그래도 후반에 끝이 보일 때 쯤에는 드디어 페이지를 더 안 만들어도 되겠구나 싶어서 내심 더 힘낸것 같습니다.<br>
첫 프로젝트를 마무리한 만큼 한 걸음 내 딛었다는 뿌듯함도 있고,<br>
이걸 기반으로 계속 쌓여갔으면 합니다.<br>

</font>


<br>
<br>
<font color="black" size="4" face="Arial">
<strong>손재원</strong> (기능및 세부디자인 담당) -->
===============================================<br>
처음 이 프로젝트를 시작한다고 했을때는 별 생각이 없었습니다.<br>
서로에게 시간이 주어졌을때 제가 딱히 이렇다고 할만한 일을 한 기억이 없습니다.<br>
하지만 시간이 조금 지나고 홈페이지가 완성되가는 걸 제 눈으로 직접 보면서<br>
뭔가 형언할수 없는 감정이 제 가슴에 북받쳐 오르는 것이었습니다.<br>
그래서 친구를 도와 저 나름대로 무슨일을 할까 많이 고민을 하여 기능을 추가하거나 디자인을 손보거나 했죠.<br>
제가 만든 기능이 홈페이지에 올라와서 보여지는걸 보고 참 뿌듯하다고 느낀것 같습니다.<br>
부족한점도 많았지만 친구들 끼리 서로 커버하며 홈페이지를 완성하는것을 보고 <br>
알수없는 만족감이 느껴지기도 했고 또 친구들이 대단하다고도 느꼈습니다.<br>
이번일로 참 많은 생각을 했고 교훈도 느꼈습니다 앞으로도 이렇게 더 열심히 노력하고 싶습니다.<br>
마지막으로 친구들아 수고했다!<br>






<!-- 마지막 후기 END-->







  
</center>
 </body>
</html>
