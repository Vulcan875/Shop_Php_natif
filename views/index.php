
<?php 
include('../utilities/db_connexion.php');


session_start();

$session_id=$_SESSION['id'];


$result=mysqli_query($con, "select * from users where id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="back-office/assets/styles/style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['username']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="dhbord.html">Go to admin dashboard</a></p>
    <p><a href="dhbord.html">Go to Client application</a></p>

   
  </div>
</div>

</body>
</html>