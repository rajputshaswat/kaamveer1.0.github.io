<?php
include 'adminconnect.php';
$id=$_GET['orderid'];
$deletequery="delete from  bookingdata where orderid=$id ";
$query=mysqli_query($con,$deletequery);
header("location:display.php");
?>