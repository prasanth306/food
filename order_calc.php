

<!DOCTYPE HTML>
<html>
<style>
body{
font-family:papyrus;
font-weight:bold;
font-size:20px;
text-align:center;
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
background-color:white;
position:absolute;
width:300px;
height:500px;
font-size:25px;
overflow:hidden;
border-radius:15px;

top:15%;
left:40%
}
form input{
width:100px	;
height:30px;
font-size:15px;

cursor:pointer;
color:white;
background-color:dodgerblue;
border-radius:10px;
}


</style>
<body>
<div>
<?php
$servername="localhost";
$username="root";
$password="";
$db="food";
$conn=new mysqli($servername,$username,$password,$db);

$name1=$_POST['name'];
$phone1=$_POST['phone'];
$item_code1=$_POST['item_code'];
$quantity1=$_POST['quantity'];
if($item_code1==1)
{
$value=50;	
$item="burger";
}
elseif($item_code1==2)
{
$value=100;	
$item="cake";
}
$amount_to_pay=$quantity1*$value;
$conn->query("insert into food values ('$name1',$phone1,$quantity1,$amount_to_pay,'$item',NULL)");

echo "<br>Your Order has been placed<br>";
echo "details:<br><br><br>Item: ".$item."<br>Amount: ".$amount_to_pay;
$res_id=$conn->query("SELECT `id` FROM `food` WHERE name='$name1' and phone='$phone1'");
if($res_id->num_rows>=1){
while($ans=$res_id->fetch_assoc()){
echo "<br>Order_id: ".$ans['id'];
}	
}
?>
<?php
session_start();
$_SESSION['inherit']=$amount_to_pay;
?>
<form action="payment.php" method="post">
<input type="submit" name="proceed_pay" value="PAY NOW">
</form>
</div>
</body>
</html>