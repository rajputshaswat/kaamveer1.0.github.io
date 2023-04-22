<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bcss.css">
    <title>Register</title>
    <!--    Bootstrap js files-->
  <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <h1>Welcome to Dashboard <?php echo $_SESSION['hello'];?></h1>
       <!-- <a href="logout.php" class="btn btn-warning">Logout</a>-->
        <button type="button" onclick="document.location='logout.php'">Logout</button>
    </div>
    <form action="bookinginfo.php" method="post">
        <!-- class named "container" is assigned to div -->
        <div class="container">
          <h1>Kindly fill in this form to Book the Service</h1>
          <h4>UserName</h4>
                <input type="text" class="form-control" name="username">
              <br>
          <h4>Service type</h4>
          <select name="servtype" class="drop">
            <option selected>Mopping</option>
            <option>Maid</option>
            <option>Car wash</option>
            <option>Wash cloth</option>
        </select>
        <h4>Service Date</h4>
        <input type="date" name="date" class="form-control">
        <br>
        <div class="form-group">
          <h4>Mobile no.</h4>
                <input type="text" class="form-control" name="mobile">
            </div>
            <br>
            <br>
            <br>
          <button type="submit">Click Here for Payment</button>
        </div>
      </form>
  
  </body>
</html>
