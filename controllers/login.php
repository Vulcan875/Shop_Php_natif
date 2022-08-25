<?php

include('../utilities/db_connexion.php');

	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{		
					session_start();
					$_SESSION['id']=$row['id'];
					$id = $_SESSION['id'];

					$result=mysqli_query($con, "select * from users where id='$id'")or die('Error In Session');
					$user=mysqli_fetch_array($result);

					if ($user['role'] == 'Admin'){
						header("location: http://localhost/Projet%20web%202A/Shop_Php_natif/views/back-office/index.php");
					}else {
						header("location: http://localhost/Projet%20web%202A/Shop_Php_natif/views/front-office/index.php");
					}
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>