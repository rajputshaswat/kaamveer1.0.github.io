<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo"connection sucessful";
}
else
echo"No connection";
mysqli_select_db($con,'booking');
$username = $_POST['username'];
$servtype = $_POST['servtype'];
$date = $_POST['date'];
$mobile = $_POST['mobile'];
$query = "insert into bookingdata (username , servtype , date ,mobile) value('$username','$servtype','$date','$mobile')";

mysqli_query($con,$query);
header('location:paymentform.php');
?>