<?php
session_start();
$mass=$_SESSION['inherit'];
?>

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
</style>
<body>
<div>
<?php
$servername="localhost";
$username="root";
$password="";
$db="food";
$conn=new mysqli($servername,$username,$password,$db);
$name2=$_POST['pay_name'];
$pass2=$_POST['pay_pass'];
$res=$conn->query("select *from payment where name='$name2' AND password='$pass2'");
if($res->num_rows>=1){
	while($final=$res->fetch_assoc())
	{
		$done=$final['balance'];
	}

$final_balance=$done-$mass;
$conn->query("update payment set balance=$final_balance where name='$name2' AND password='$pass2'");
$conn->query("update payment set paid_amount=$mass where name='$name2' AND password='$pass2'");
$t_id=mt_rand();
$conn->query("update payment set payment_id=$t_id where name='$name2' AND password='$pass2'");
echo "<br>Payment has been successfuly done!!!<br>THANK YOU";
echo"<br>Your Transaction Id is ".$t_id;
    }
    else{
        
        echo "payment failed....please try again later";
    }
?>

</div>
</body>
</html>