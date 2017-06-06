<?php
/*	session_start();
	if(isset($_SESSION['login']))
      {
	     if($_SESSION['login'] == "yes"){
			 header("location: tution-fee.php");
			 exit();
		 }
      }*/
	
	

	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>LogIn</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Verify your Potty Id</h2>
        <label for="pottyId" class="sr-only">Potty Id</label>
        <input type="text" id="pottyId" name="pottyId" class="form-control" placeholder="Potty Id" required autofocus>
        <label for="inputPaadword" class="sr-only">Paadword</label>
        <input type="password" name="inputPaadword" id="inputPaadword" class="form-control" placeholder="Paadword" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember my smell
          </label>
        </div>

        
    <?php
        if(isset($_POST['pottyId']) & isset($_POST['inputPaadword']))
        {


          $paadword = $_POST['inputPaadword'];
          $pottyId=$_POST['pottyId'];

          $conn = mysqli_connect("in-cdbr-azure-south-c.cloudapp.net","b884278164bf7d","63fe6227","poop");
          if($conn){
          /*  echo '<b>Hagg to raha hai!!</b>';*/
          }
          
          $query = "SELECT * FROM ulogin WHERE password='$password' AND enrollNo = '$enrollment'";
          $result = mysqli_query($conn, $query);
            
/*
          if(mysqli_num_rows($result)>0)
          {
            $userData = mysqli_fetch_assoc($result);
            $_SESSION["login"]="yes";
            $_SESSION["username"]=$userData["username"];

                $_SESSION["enrollment"]=$userData["enrollNo"];
                    
            header('location: tution-fee.php');
          }*/

          if($pottyId=='potty' && $paadword='mummykarli'){
             header('location: hagnekbaad.php');
          }
          else
          {
            echo '<p style="color:red" class="center">Login Failed</p>';
          }

        }
     ?>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Let's Potty!!</button>
      </form>

    </div> <!-- /container -->
</body>
</html>
