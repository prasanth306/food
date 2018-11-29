<!DOCTYPE HTML>
<html>
<style>
body{
	font-family:papyrus;
	font-weight:bold;
	font-size:20px;
background-image:url('cake1.jpg');
background-repeat:no-repeat;
background-size:cover;
animation-name:home_anim;
animation-duration:8s;
animation-iteration-count:infinite;
}
@keyframes home_anim{
0%{background-image:url('cake1.jpg');color:blue;}
25%{background-image:url('cake2.jpg');color:red;}
50%{background-image:url('cake3.jpg');color:deeppink;}
75%{background-image:url('cake4.jpg');color:purple;}
100%{background-image:url('cake1.jpg');color:blue;}
}
ul .c1,.c2{
width:400px;
height:400px;
font-size:30px;
font-family:georgia;
text-decoration:none;
border-radius:50%;
background-color:white;
text-align:center;
}

li
{
float:left;
padding: 20px 50px;
}
div img{
padding:40px 20px;
	width:200px;
	height:200px;
	border-radius:50%;
}
div img:hover{
	transition:1s;
	width:250px;
	height:250px;
}
</style>
<body>
<ul>
<li><a href="#" style="text-decoration:none" onclick="window.location='counter1.php'" title="GO to counter 1"><div class="c1"><img src="burger.png">COUNTER 1
</div></a></li>
<li><a href="#"style="text-decoration:none"title="GO to counter 2"><div class="c2"><img src="cake2.jpg">COUNTER 2
</div></a></li>
</ul>
</body>
</html>