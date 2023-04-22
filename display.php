<?php
session_start();
if(!isset($_SESSION['adminid'])){
    header("location:adminlogin.php");
}
?>


<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display data</title>
	<!--    Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Ubuntu:400,700&display=swap" rel="stylesheet">
  <!--    Bootstrap css files-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--    Custom css files-->
  <link rel="stylesheet" href="displaycss.css">

  <!--    Font Awesome-->
  <script defer src="https://kit.fontawesome.com/e87d687bba.js"></script>
  <!--    Bootstrap js files-->
  <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
  	div.header button{
        background-color: #blue;
        font-size: 16px;
        font-weight: 550;
        padding: 8px 12px;
        border: 2px solid black;
        border-radius: 5px;
  	
  </style>
</head>
<body>
	<div class="main-div">
		<h1>List of order placed</h1>
		<div class="centre-div">
			<div class="table-responsive">
				<table>
					<thead>
						<tr>
							<th>Orderid</th>
							<th>username</th>
							<th>Servicetype</th>
							<th>Date</th>
							<th>Mobile</th>
							<th colspan="2">Operation</th>
						</tr>

					</thead>
					<tbody>
						<?php
                         include 'adminconnect.php';
                         $selectquery= "SELECT * FROM bookingdata";
                         $query= mysqli_query($con,$selectquery);
                         $num=mysqli_num_rows($query);
                         while ($res = mysqli_fetch_array($query)) {
	                     ?>
	                     <tr>
							<td><?php echo $res['orderid'];?></td>
							<td><?php echo $res['username'];?></td>
							<td><?php echo $res['servtype'];?></td>
							<td><?php echo $res['date'];?></td>
							<td><?php echo $res['mobile'];?></td>
							<td><a href="#" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i></td>
							<td><a href="delete.php?orderid=<?php echo $res['orderid']; ?>" data-toggle="tooltip" data-placement="bottom" title="REMOVE"><i class="fa fa-trash"></i></td>
						</tr>

	
                         <?php 
                           }
                         ?>  
						
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<div class="header">
<center>
<form method="post">  
<button  name="logout">Logout</button> 
</form> 
</div>  
<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("location:adminlogin.php");
}
?>
</center>
</div>

</body>
</html>
