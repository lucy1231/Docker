<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv="Content-Type" content="text/html;  charset=euc-kr" />
  <title>회원가입</title>
   <link rel="shortcut icon" type="image/x-icon" href="http://icons.iconarchive.com/icons/ampeross/lamond/128/minecraft-icon.png" />

   </head>
<!--<script type="text/javascript">
 window.onload=function(){
  document.getElementById('my-form').onsubmit=function(){
   var pass=document.getElementById('pass').value;
   var passCheck=document.getElementById('pass-check').value;
   
   if(pass==passCheck){
    alert('비밀번호가 일치합니다');
   }else{
    alert('비밀번호가 다릅니다 다시입력해주세요.');
     return false; 
   }
   
  }
 }
</script>-->

<style>
#box1{
  position: relative;

  width: 495px;
  height: 1200px;
  margin-top: 85px;
  border: 1px solid black;
  background-color: white;
}
#box2{
  position: relative;

  margin-top: 20px;
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
body
{
background-image:url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIWFRUVFRUVFRUVFxcXFRUVFRcXFxUVFRcYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0NDg0NDjcZFRkrNysrLTctKy0rKystNysrLS0tKystKysrKystLS0tKysrKysrNysrKysrKysrKysrK//AABEIAKUBMQMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAACAwEABAf/xAAdEAEBAQEBAAMBAQAAAAAAAAAAAQIRElFhcZFB/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A+PQmQo0NhRkOKjpDkZIcUbIUjpDgNjZGyFIo6Q5HSHIqDIpI6QpAHjfJ8KRQJHWKcdwA4yxXjLAS8umVfI2AlYzitg2AlqBcrag3KCPB0rqBqCpWDqK0LEEbBsVsCoJ6CxSwKgFGnYNAKylRqKi5zUHohQYUihQ4MOKjZDjIcUbFIOYeVChSMzDio2HI6FmA2E6FIozhcLhSKDxshSO5wGVlhusBPjOKcHgJ8GqWDQTsCxXUCoJULFbA1EE6npW0LEVKwKrQ0glRqmoFBOhVLAqAVlKjUVHjnOB6YUgw4qFIcg5OKFIcgw8wCzDkZIeVCzFJGZhSKjZDzlkiuYoyRSZGKyKM43y3jZAdMu8qZyyxQZl3FJGagJXLLn5UsZ5BKweK7g8QSsTuVtxOoJWBYrYG4CNg2KBqIJaiditCxFTsTsV0FQTsCxSp1AKylRqKg5jgeuFBhxUOHAhxQ8qROKZUOQ8hFMqHIpAh5VFIUg5UihZOQcmBSFIJxR0jZPpsKAPGWKDYoPAsUooJ2Do2UEtQLFNJ2oJ6ieorU9IJ6T1FanpBKhpShUVPUCnoKgFTqmk6gNGlRqDzNY4V64cCHFQ4eQyplQopAhRRTKmQyWVFcqRPMUiocUzE1MT7UOU4CmYBHAJQ5Cg4n5/SoO47X42R2lAtCw9dDiA0Kek+AOgtUqWpUAqdOjpBPVTp0NIJ0NHqJ6RQ0FOp1AaFOhUAo0qNQeZznCvXDgQ4qHlSJ5OKHKplPKkUUyeU4plUVyWaEOKKZqmU4cqikqkSzVJQPpZ0EpxQ8t6MrpVFB1XMtBl0xv6FqDNBW6rKAbT1VNVOoBQ0dT0gFT0eg0gnanVKGkUNJ09BUAqdUoVAKNKjUHmaxwr1woEKKisOJws1RSVTNSypAUimUs081RaU81LNPNVFc1SVKFKotmqI5pSqK9KaT6SivWzSTZoFejaFrtaAvTOstGg7rKzoaqDtVO1utBQZaGq2hagyp6paqdqA2hSqdRR1RraFQHQUqFQZQpUaivP1znA9MOBCih5Uynk4IcOJynFFclE8nKork+pws6VFZVMdRlUyoamUpTlBS1vU5ovSimet1QjugcbaErLoG2/TO3/GXTOg3dB1o9BtqdbuhdIDb8Dpto6QCjW9DSKOgpWhUGVOlQoMoUqFqA1lbRqK87nOQeqNgxsUUhShClVFIcTlKVRWU8pSnFFZSlTlKUFslKlKUqorDlSlKVRT0UTmm+gV9OlT67qivWXQdZ6A2Wj6Z1BtrLRumdBtodZrQ3SDrQ1XWjaDqFraGqijaNbaFqDNUK20agy0K2jaDKNayoqDicgtGyi2KHClCFFRSUonKUoKylKnK2VRaUpUpS6otKUqMpZoLSl1HpSqivS6l1voFetmkZpt0CtrLpPrbQPrOp+megP0y0bR6BWj1loWorbRtZaNoNtC11o2oOtCutG0GWja20Kg4a0aisrGsAOOa4CKMcBQuucBSlGOVDlKVzgOUs1zlG9KVrlG9KVzgbK3rnKjZp3XOBsrPTXAy1nXOBlrHOQHVZqucKFo2ucgI6rnANoWucgNrHOQGj1zhWOc4Bc5wP/Z');
background-repeat:no-repeat;
background-size: 1950px 1600px;
}

</style>

<body>

 <center>

 <div id=box1>

<br><br>
 <center><a href="index.php"><img src="/img/logo.jpg"></a></center>

 <!--<input type="button" value="눌러봐~" onclick="alert(' ㅎㅎ !')" /> -->
 <!-- <label>아이디<input type="text" placeholder="아이디 입력" id="userid" name="userid" /></label> -->
 <form  name="sign_in" method="POST" action="join_loading.php"> <!-- DB연동 데이터값 보내는 폼 -->
 <div id=box3>
 <font><input placeholder="이메일" style="border:none; width:388px; height:57px;" name="email">
 <font size=2px color=666666><span style="color:red">[앞으로 사용하실 이메일 아이디]</span>를 입력해주세요.</font>

 <br>
 <br>
 <br>
 <br>

 <!--<form id="my-form">-->

 <div id=box3>

 <!--<label for="pass">-->

 <input placeholder="비밀번호" style="border:none; width:388px; height:57px;" type="password" name="password"> 
 <font size=2px color=666666><span style="color:red">[이메일 아이디의 비밀번호]</span>를 설정해주세요.</font>
 <!--</label>-->

 <br>
 <br>
 
 <!--<div id=box3>-->
 <!--<label for="pass-check">
 <font><input placeholder="비밀번호 확인" style="border:none; width:388px; height:57px;" id="pass-check" type="password" id="pass-check"> 
 <p>
 <font size=2px color=666666>비밀번호를 재입력후 </font>-->
 <!--<input type="submit" value="비밀번호 확인"   />-->
 <!--</label>-->
 <!--</form>-->

<br>
<br>

 <div id=box3>
 <font><input placeholder="닉네임" style="border:none; width:388px; height:57px;" name="nickname">
 <br>
 <br>
  <font size=2px color=666666>홈페이지에서 <span style="color:red">[사용하실 닉네임]</span>을 입력해주세요.</font>
  <!--<input type="submit" value="닉네임 중복확인"   />-->
<br>
<br>
<br>
<br>

 <div id=box3>
 <font><input placeholder="비밀번호 분실 시 문제" style="border:none; width:388px; height:57px;" name="pass_q">
 <br>
 <br>
  <font size=2px color=666666>비밀번호 분실 시 <span style="color:red">[힌트]</span>를 입력해주세요.</font>

<br>
<br>
<br>
<br>

 <div id=box3>
 <font><input placeholder="문제의 정답" style="border:none; width:388px; height:57px;" name="pass_a">
 <br>
 <br>
  <font size=2px color=666666>비밀번호 분실 시 <span style="color:red">[문제의 정답]</span>을 입력해주세요.</font>

<br>
<br>
<br>
<br>


 <input type="submit" value="회원가입" style="width:95px; height:40px; background-color:#ff6000;"/>

 </div>
 </form>  <!-- DB연동 데이터값 보내는 폼 -->


</center>
 </body>
</html>