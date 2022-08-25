<?php session_start(); ?>
<?php include('../../../utilities/db_connexion.php');
 if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];

					$result=mysqli_query($con, "select * from users where id='$id'")or die('Error In Session');
					$user=mysqli_fetch_array($result);

					if ($user['role'] == 'Admin'){
						header("location: http://localhost/Projet%20web%202A/Shop_Php_natif/views/back-office/index.php");
					}else {
						header("location: http://localhost/Projet%20web%202A/Shop_Php_natif/views/front-office/index.php");
					}
} else {
  



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="../../../controllers/login.php" method="post">
    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="username" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <div class="reminder">
    <p>Not a member? <a href="#">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>


</body>
</html>


<?php } ?>