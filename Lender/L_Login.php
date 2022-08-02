<?php

if(isset($_POST['email']))
{
$email = $_POST['email'];
$pass = $_POST['pass'];
}

$con = mysqli_connect('localhost', 'root','','lender');
$sql = "select *from lusers where email = '$email' and pass= '$pass'";  

$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
$url = "/Lender/LHP.html";
if($count == 1){  
	header('Location: '.$url);
}  
else
{  
	echo "<h1> Login failed. Invalid username or password.</h1>";  
}     

?>
