<html>
<head>
<title>Trending</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-image:linear-gradient(#C3DDDD,#f2f2f2);">
	<h3 class="text-center text-info display-3 bg-dark" style="font-family:Arieal";>Trending</h3>
	<div class="container">
		<div class="row">
	<?php  include 'action.php';
		$query = "SELECT `id`,`name`,`image`,`cost` FROM trending";
		$result = mysqli_query($con,$query);
		
		$num = mysqli_num_rows($result);
		
		if($num>0){
			while($row=mysqli_fetch_array($result)){
				?>
					<div class="col-lg-4">
						<form>
						<div class="card mt-5">
						  <div class="card-title"><h5 class="text-center text-info display-6"><?php echo $row['name'];?></h5></div>
							<img src="<?php echo $row['image'];?>" class="img img-thumbnail">
							<div class="card-body">
								<h3 class="text-center text-success">&#8377;<?php echo $row['cost'];?></h3>
								<div class="btn-group d-flex">
									<button class="btn btn-info">AddToCart</button>
									<button class="btn btn-warning">BuyNow</button>
								</div>
							
							</div>
						</div>
						</form>
					
					</div>
				
				<?php
				
			}
			
		}
	
	
	
	?>
	
	</div>
	  </div>
	
</body>

</html>