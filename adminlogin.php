<?php
  require("connection.php");
?>



<html>
<head>
<title>Admin login</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="styleadminlogin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>ADMIN LOGIN</h2>
    <form method="post">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username" name="adname">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="adpassword">
        </div>
        
        <button type="submit" name="signin">Sign In</button>

    </form>
</div>
<?php
if(isset($_POST['signin']))
{
  $query="SELECT * FROM `adminlogin` WHERE `adname` = '$_POST[adname]' AND `adpass`='$_POST[adpassword]'";
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result)==1)
  {
    session_start();
    $_SESSION['adminid']=$_POST['adname'];
    header("location:admin.php");
  }
  else
  {
    echo "<script>alert('Incorrect password');</script>";
  }

}

?>

</body>
</html>