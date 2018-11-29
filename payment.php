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
div{
position:absolute;
width:350px;
height:400px;
top:10%;
left:36%;
border-radius:20px;
background-color:white;
text-align:center;
}

form input[type="text"], input[type="password"]{
border:none;
outline:none;
color:deeppink;
font-size:15px;
border-bottom:2px solid blue;
}
form input[type="submit"]{
border-radius:20px;
width:130px;
height:40px;
cursor:pointer;
background-color:dodgerblue;
font-size:18px;
color:white;
}
</style>
<body>
<div>
<form action="final_payment.php" method="post">
<br><br>
NAME<br>
<input type="text" name="pay_name" placeholder="Enter name" required><br><br><br>
PASSWORD<br>
<input type="password" name="pay_pass" placeholder="Enter password" required><br><br><br>
<input type="submit" value="Proceed" name="pay_proceed">

</form>
</div>
</body>
</html>