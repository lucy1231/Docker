<style>
#fullmoon{
position: left;
left:500px;

width: 1000px;
height: 70px;
}

/*#box1{*/
/* position: relative;*/
/**/
/* width: 100%;*/
/* height: 40px;*/
/* border: 1px solid black;*/
/* background-color: #00bff3;*/
/*}*/

#box2{
  position: left;

  width: 40px;
  height: 100px;
  border: 1px solid black;
}
#box3{
position: relative;

width: 1875px;
height: 800px;
border-bottom: 1px solid black;
background-image:url('/img/background.jpg')
}

#box4{
  position: relative;
  width: 900px;
  height: 320px;
  margin-top: 10px;
  background-color: white;
}
#box5{
  position: relative;
  width: 100%;
  border: 1px solid black;
  padding-bottom:30px;
  margin-top:30px;
} 

#box6{
position: relative;


  width: 500px;
  height: 380px;
  margin-top: 85px;
  border: 1px solid black;
  background-color: white;
}

#box7{
	position: relative;
	width: 400px;
	height: 215px;
	border: 1px solid black;
	background-image:url('/img/time.jpg');
	background-size: 400px 200px;
  }


#box9{
position: relative;

}
#box10{
  position: relative;
  width: 100%px;
  height: 45px;
  border-bottom: 1px solid black;
} 

#box11{
position: relative;
width:100%;
height:200px;
margin-bottom: 20px;
 border-bottom: 1px solid black;
 background: #231f20;
}
#box12{
position: relative;
}

/*로그인 박스*/
#login1{
  position: relative;
  width: 484;
  height: 215px;
  border: 1px solid black;
  background-color: white;
}
#login2{
  position: relative;


  width: 350px;
  height: 50px;
  margin-top: 60px;
  border: 1px;
  border-radius:20px;
  background-color: #5B5EE8;
}
#login3{
  position: relative;

  margin: 35px 0px 0px 0px;
}


#rightColumn {
position: absolute;
width: 100%;
height: 500px;
padding-left: 200px;
}

#file {
position: absolute;

color:black;
font-weight:bold;
}



#sun {
width:100%;
margin-top: 5px;
margin-bottom: 5px;
border-bottom: 1px solid black;
}




a {text-decoration:none }

`	+

.slide-wrap {position:relative; width:740px; height:450px; overflow:hidden;}
ul.slide-list{ position:absolute; left;0px; }
ul.slide-list li {position:relative; float:left; width:740px; height:450px;}   
 
a#prev2 {position:absolute; left:15px; top:220px; z-index:20;}
a#next2 {position:absolute; right:30px; top:220px; z-index:20;}

.image {
    position:relative;
	}
.image .text{
   position:absolute;
   top: 10px;
   left: 10px;
   color: white;
   }

/* 버튼 스타일 */
/*button{*/
/*  background:#00bff3;*/
/*  color:#fff;*/
/*  border:none;*/
/*  position:relative;*/
/*  width: 430px;*/
/*  height:60px;*/
/*  font-size:20px;*/
/*  padding:0 2em;*/
/*  cursor:pointer;*/
/*  transition:800ms ease all;*/
/*  outline:none;*/
/*}*/
/*button:hover{*/
/*  background:#fff;*/
/*  color:#ed1c24;*/
/*}*/
/*button:before,button:after{*/
/*  content:'';*/
/*  position:absolute;*/
/*  top:0;*/
/*  right:0;*/
/*  height:2px;*/
/*  width:0;*/
/*  background: #00bff3;*/
/*  transition:400ms ease all;*/
/*}*/
/*button:after{*/
/*  right:inherit;*/
/*  top:inherit;*/
/*  left:0;*/
/*  bottom:0;*/
/*}*/
/*button:hover:before,button:hover:after{*/
/*  width:100%;*/
/*  transition:800ms ease all;*/
/*}*/

/*body {top-margin:0; bottom-margin:0; left-margin:0; right-margin:0*/
/*	}*/
/*	*/
body {
/* background-image:url('../img/1234.jpg');*/
/* background-size: 1800px 1500px;*/
}

h2 {
  font-family: 'Arial';
  color: white;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 3rem;
  line-height: 0.75;
}

span {
  display: block;
}

span:not(.light) {
  opacity: 0;
  animation: flashText .7s ease-out alternate infinite;
}

span.light {
  position: relative;
  display: inline-block;
  
  &:before {
    position: absolute;
    left: 0;
    top: -10%;
    width: 100%;
    height: 120%;
    background: white;
    filter: blur(10px);
    content: "";
    opacity: 0;
    animation: flash .5s ease-out alternate infinite;
  }
}


@keyframes flash{
  to {
    opacity: 1;
  }
}

@keyframes flashText {
  to {
    opacity: 0.15;
  }
}

.fun-btn {
  /* change bg color to get different hues    */
  background-color: salmon;
  color: white;
  padding: 2em 3em;
  border: none;
  transition: all .3s ease;
  border-radius: 5px;
  letter-spacing: 2px;
  text-transform: uppercase;
  outline: none;
  align-self: center;
  cursor: pointer;
  font-weight: bold;
}

.fun-btn:hover {
  animation: random-bg .5s linear infinite, grow 1300ms ease infinite;
}

.start-fun {
  background-color: #fff !important;
  /* change color of button text when fun is started   */
  color: salmon !important;
}

/* pulsating effect on button */
@keyframes grow {
  0% {
    transform: scale(1);
  }
  14% {
    transform: scale(1.3);
  }
  28% {
    transform: scale(1);
  }
  42% {
    transform: scale(1.3);
  }
  70% {
    transform: scale(1);
  }
}




/*.page {*/
/*  width: 100vw;*/
/*  height: 100vh;*/
/*  display: flex;*/
/*  justify-content: center;*/
/*}


/* add default color for animation start  */


/* toggle this class */

.color-bg-start {
  background-color: salmon;
}


/* toggle class bg-animate-color */

.bg-animate-color {
  animation: random-bg .5s linear infinite;
}


/* add animation to bg color  */

@keyframes random-bg {
  from {
    filter: hue-rotate(0);
  }
  to {
    filter: hue-rotate(360deg);
  }
}

.fun-btn {
  /* change bg color to get different hues    */
  background-color: salmon;
  color: white;
  padding: 2em 3em;
  border: none;
  transition: all .3s ease;
  border-radius: 5px;
  letter-spacing: 2px;
  text-transform: uppercase;
  outline: none;
  align-self: center;
  cursor: pointer;
  font-weight: bold;
  width: 294px;
}

.fun-btn:hover {
  animation: random-bg .5s linear infinite, grow 1300ms ease infinite;
}

.start-fun {
  background-color: #fff !important;
  /* change color of button text when fun is started   */
  color: salmon !important;
}

/* pulsating effect on button */
@keyframes grow {
  0% {
    transform: scale(1);
  }
  14% {
    transform: scale(1.3);
  }
  28% {
    transform: scale(1);
  }
  42% {
    transform: scale(1.3);
  }
  70% {
    transform: scale(1);
  }
}




</style>