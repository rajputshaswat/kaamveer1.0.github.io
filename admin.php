<?php
session_start();
if(!isset($_SESSION['adminid'])){
    header("location:adminlogin.php");
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="stylead.css"></link>
  <style>
    body{
        margin: 0px;
    }
    div.header button{
        background-color: #floralwhite;
        font-size: 16px;
        font-weight: 550;
        padding: 8px 12px;
        border: 2px solid black;
        border-radius: 5px;
    }
    div.header
    {
        font-family: poppins;
        display: flex;
        justify-content: space-between;
        align-items: centre;
        padding: 0px 60px;
        background-color: #204969;


    }
.container { 
  height: 200px;
  position: relative;
   
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
      
  </style>
    
</head>

<body > 
<div class="header">
<h1>Welcome To Admin panel- <?php echo $_SESSION['adminid'] ?></h1>
<form method="post" action="display.php">  
<button name="logout">Logout</button> 
</form> 
</div>  
<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("location:adminlogin.php");
}
?>
<br>
<br>
<br>
<br>
<marquee direction="right" behavior="alternate">  
 <center>
<h3>Click Below to View the Order details</h3>

</center>
</marquee>
<center>
<img src="arrow gif.gif" alt="Icon" style="width:128px;height:128px;">
</center>

<div class="container">
  <div class="center">

    <button onclick="document.location='display.php'">ORDER DETAIL</button>
  </div>
</div>
 

</body>
 
</html>