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
animation-name:order_anim;
animation-duration:12s;
animation-iteration-count:infinite;
}
@keyframes order_anim{
0%{background-image:url('cake1.jpg');color:blue;}
25%{background-image:url('cake2.jpg');color:red;}
50%{background-image:url('cake3.jpg');color:deeppink;}
75%{background-image:url('cake4.jpg');color:purple;}
100%{background-image:url('cake1.jpg');color:blue;}
}
div{
position:absolute;
width:250px;
height:300px;
top:20%;
left:39%;
    padding: 30px;
border-radius:20px;
background-color:white;
text-align:center;
}
form input[type="text"], input[type="number"]{
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
<form action="counter1_calc.php" method="POST">
    Enter The Transaction Id<br><br>
<input type="number" name="counter1" placeholder="Enter Transaction Id">
    <input type="submit" name="counter1_submit" value="submit">
</form>
</div>
</body>
</html>