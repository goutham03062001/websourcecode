<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "You Are Logged Out";
	header('location:login.php');
}
?>
<html>
<head>
<title>Gooutham's mart Home page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
 
</head>

<body style="background-image:linear-gradient(#C3DDDD,#f2f2f2);">
<h3 class="text-center text-success display-3 bg-dark" style="font-family:Arieal;"><div class="text text-primary text-center bg-dark" style="font-family:Harrington;">Welcome <?php
echo $_SESSION['username'];


?></div></h3>
<!--navigation bar-->
	<ul class="nav nav-tabs" style="padding-right:150px;">
  <li class="nav-item">
    <a class="nav-link active" href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bestsellers.php">BestSellers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Trending.php">Trending</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Gaming</a>
  </li>
   <li class="nav-item">
    <a class="nav-link " href="learn_technologies/learn_bootstrap.php">LearnTechnologies</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link " href="blog.php">Blog</a>
  </li>
 	<button class=" btn btn-dark ml-auto"><a href="signin.php" style="color:red; font-size:25px; text-decoration: none">Signin</a></button>
 	<button class=" btn btn-dark ml-auto"><a href="login.php" style="color:red; font-size:25px; text-decoration: none">Login</a></button>
  <button class="btn btn-group ml-auto btn-secondary">
   <a href="logout.php" style="color:blue; font-size:25px; text-decoration: none;">Logout</a></button>


</ul>
<div class="container">
	<div class="row">
		<?php require 'action.php'; 
		$query = mysqli_query($con, "Select `id`,`name`,`image`,`cost` FROM images");
		$num = mysqli_num_rows($query);
		if($num>0){
			while($row = mysqli_fetch_array($query)){
				?>
				
				<div class="col-lg-4">
					<div class="card p-3 mt-5">
						<img src="<?php echo $row['image'];?>" class="img img-thumbnail">
						<div class="card-body">
							<div class="card-title text-center">
								<?php echo $row['name'];?>
							
							</div>
								<div class="card-content">
									<h5 class="text-info text-center"><?php echo $row['cost'];?></h5>
									
								</div>
								<input type="text" placeholder="Quantity" name="quantity" class="form-control">
								<br>
								<div class="btn-group d-flex">
									<button class="btn btn-success flex-fill">AddToCart</button>
									<button class="btn btn-warning flex-fill">BuyNow</button>
									<i class="fa fa-facebook"></i>
								
								</div>
								
							
						</div>
						
					</div>
				
				
				</div>
				
				<?php
				
				
				
			}
			
			
		}

?>

		
		
	
	</div>
</div>
</body>

</html>