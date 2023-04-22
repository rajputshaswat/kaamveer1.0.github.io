<?php
session_start();
if (isset($_SESSION["adusername"])) {
   header("Location: admin.php");
}
else{
  header("Location:adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styleadlg.css">
    <title>Register</title>
  </head>

  <body>
    <form>
        <!-- class named "container" is assigned to div -->
        <div class="container">
          <h1>Admin login</h1>
          <p>Kindly fill in this form to Book the Service.</p>
          <label for="username" ><b>Username</b></label>
          <input name="adusername" 
            type="text"
            placeholder="Enter username"
            name="username"
            id="username"
            required
          />
  
          <label for="pwd"><b>Password</b></label>
          <input name="adpass"
            type="password"
            placeholder="Enter Password"
            name="pwd"
            id="pwd"
            required
            
          />
          <button type="submit" name="login" onclick="document.location='admin.php'">Log in</button>
        </div>
      </form>
      <?php
        if (isset($_POST["login"])) {
           $adusername = $_POST["adusername"];
           $adpass = $_POST["adpass"];
            require_once "databaseadmin.php";
            $sql = "SELECT * FROM adminlogin WHERE adusername = '$adusername'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($adpass, $user["adpass"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    $_SESSION['hello'] = $email;

                    header("Location: admin.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>username does not match</div>";
            }
        }
        ?>
  
  </body>
</html>
