<?php include('process.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>PB</title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  <header class="main">
    <div class="row">
   	 
         
	     <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      <p><a href="index.php?logout='1'" style="color:white;">Logout</a></p>
		 <?php endif ?> 
		</nav>
		</div>
		 </header><br>

<div id="main">
			
<br>
	<div class="row justify-content-center">
	<form action="process.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Please pill up properly</p>
		<div class="form-group">
			<label>firstname</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter your firstname">
		</div>
		<div class="form-group">
			<label>lastname</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter your lastname">
		</div>
		<div class="form-group">
			<label>address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter your address">
		</div>
		<div class="form-group">
			<label>company</label>
			<input type="text" name="company" class="form-control" value="<?php echo $company;?>"placeholder="Enter your company">
		</div>
		<div class="form-group">
			<label>contact no.</label>
			<input type="text" name="contact" class="form-control" value="<?php echo $contact;?>"placeholder="Enter your contact no.">
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="add.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="add.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>

</body>
</html>