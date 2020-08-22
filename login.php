
<?php
	session_start();
?>
<html>
<title>Welcome Again </title>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<h3 class="text-center">Welcome To Goutham's Mart</h3>
	
	<?php

		include 'action.php';

		if(isset($_POST['submit'])){
			$email = $_POST['useremail'];
			$password = $_POST['userpassword'];

			$email_query = " select * from registration where email = '$email' ";

			$query = mysqli_query($con, $email_query);

			$check_email = mysqli_num_rows($query);

			if($check_email){
				$email_pass = mysqli_fetch_assoc($query);

				 $dbpass = $email_pass['password'];
				 $_SESSION['username'] = $email_pass['name'];

				 $decodepass = password_verify($password,$dbpass);

				
				 if($decodepass){
				 	?>
				 	 <div class="alert alert-success bg-success">Your Now Logged In</div>


				 	
				 		<script>
				 			location.replace('Home.php');
				 		</script>

				 	<?php

				 }
				 else{
				 	?>
				 	<div class="container">
				 		<div class="row">
				 	         <div class="alert alert-warning bg-warning text-center col-lg-6 ml-  col-xs-10 col-md-10 col-sm-10">Password Is InCorrect</div>
				 	    </div>
				 	</div>

				 	<?php
				 }
			}
			else{
				?>
				 		<div class="container">
				 		<div class="row">
				 	         <div class="alert alert-warning bg-warning text-center col-lg-6 ml-  col-xs-10 col-md-10 col-sm-10">Your Email Is not exists or It may be Incorrect...</div>
				 	    </div>
				 	</div>

				<?php
			}
			
		}
	

	

	?>


	<form action="" method="POST">
	  
	   
	   <div class="col-lg-8">
		<div class="form-group">
			<label for="Email">Email:</label>
			<input type="email" placeholder="Enter Your Email" name="useremail" class="form-control">
		
		
		
		</div>
	   </div>
	   
	   <div class="col-lg-8">
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" placeholder="Enter Your Password" name="userpassword" class="form-control">
		
		
		
		</div>
	   </div>
	   
	   
	   <button class="btn btn-success ml-10" type="submit" name="submit">Login Now</button>
	   
	   <p class="text-warning"><h3 class="text-danger">Not a old user? <a class="link" href="signin.php">Signup</a></h3></p>

	</form>

</body>
</html>



