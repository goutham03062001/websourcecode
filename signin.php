<html>
<title>Goutham's Mart signup Form</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>

<h3 class="text-center">Welcome To GouthamTech</h3>
	<div class="container">
		<?php include 'action.php';
	
		if(isset($_POST['submit'])){
		
			$name = mysqli_real_escape_string($con,$_POST['username']);
			$email = mysqli_real_escape_string($con,$_POST['useremail']);
			$password= mysqli_real_escape_string($con,$_POST['userpassword']);
			$mobile = mysqli_real_escape_string($con,$_POST['usermobile']);
			$option = ['cost=>15'];
			$enpass = password_hash($password,PASSWORD_BCRYPT,$option);
			
			$checkemail = " SELECT * FROM registration where email ='$email' ";
			$inquery = mysqli_query($con,$checkemail);
			$emailcount = mysqli_num_rows($inquery);
			
			if($emailcount>0){
				?>
					<div class="alert alert-warning alert-center">This Email is Already In Use..</div>
				<?php
				
			}
			else{
				$insertquery = "INSERT INTO registration(`name`,`email`,`password`,`mobile`) VALUES('$name','$email','$enpass','$mobile')";
				
				$query =  mysqli_query($con,$insertquery);
				if($con){
					
					?>
						<div class="alert alert-success">Congrats , Your Registration has success <?php echo $name;?> Thanks For Registration..</div>
						<?php
				}
				
		
				else{
					echo "Check Your Properly";
				}
			}
		}
	
?>
	</div>
	
	<form action="" method="POST">
	  <div class="col-lg-8">
		<div class="form-group">
			<label for="Name">Name:</label>
			
			<input type="text" name ="username" placeholder="Enter Your Name Here" class="form-control" required>
		</div>
	  </div>
		   
	   <div class="col-lg-8">
		 <div class="form-group">
			<label for="Email">Email:</label>
			<input type="email" name ="useremail"placeholder="Enter Your Email" class="form-control" required>
		
		 </div>
	   </div>
		
		
	   
	   <div class="col-lg-8 col-md-8 col-xs-10 col-sm-9">
		 <div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="userpassword" placeholder="Enter Your Password" class="form-control" required>
		</div>
	  </div>
	   
	   <div class="col-lg-8 col-md-8 col-xs-10 col-sm-9">
		 <div class="form-group">
			<label for="mobileno">MobileNumber:</label>
			<input type="tel" name="usermobile" placeholder="Enter Your Mobile" class="form-control" required>
		</div>
	  </div>
	  
	   <button class="btn btn-success btn-lg" style="margin-left:50px;" name="submit" type="submit">Signin</button>
	   <p class="text"><h3 class="text-info">Alread a User?<a href="login.php">Login</a></h3></p>

	</form>
	

</body>
</html>


