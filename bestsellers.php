<html>
<head>
<title>Bestsellers</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
 
</head>

<body style="background-image:linear-gradient(#C3DDDD,#f2f2f2);">
		<h3 class="text-dark text-center display-4 bg-primary"style="font-family:Arieal;">Bestsellers</h3>
	<div class="container">
	 <div class="row">
		
	<?php
	
		include 'action.php';
		
		$query = mysqli_query($con, "SELECT  `name`,`image`,`cost` FROM bestsellers ");
		$num = mysqli_num_rows($query);
		if($num>0){
			
			while($row=mysqli_fetch_array($query)){
				?>
				<div class="col-lg-4 mt-5">
					<form>
					<div class="card p-3">
						
						<div class="card-title">
							<h5 class="text-center text-info"><?php echo $row['name'];?></h5>
							
						</div>
						<img class="img-thumbnail" src="<?php echo $row['image'];?>">
						<div class="card-body">
							<h6 class="text-center text-success">&#8377;<?php echo $row['cost'];?>/-</h6>
								<select class="form-control">
									<option >1</option>
									<option >2</option>
									<option >3</option>
									<option >4</option>
									</select>
								<br><br>
							<div class="btn-group d-flex">
								<button class="btn btn-danger d-fill">AddToCart</button>
								<button class="btn btn-warning d-fill">BuyNow</button>
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