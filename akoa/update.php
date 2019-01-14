<?php include('process.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Create</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/style.css">
	<link rel="stylesheet" href="Style/jay.css.css">
	<script type ="text/javascript" src = "Bootstrap/js/jquery-slim.min.js"></script>
	<script type ="text/javascript" src = "Bootstrap/js/popper.min.js"></script>
	<script type ="text/javascript" src = "Bootstrap/js/bootstrap.js"></script>
   </head>
<br><div class="text-center">
                <div class="header">
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>CREATE RECORD</h1></div>
  		</div>
<nav class="navbar navbar-expand-lg navbar-light bg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<a class="navbar-brand"></a>
    <ul class="navbar-nav mr-auto">
      <td>
       <a href="home.php"><input type=button value="Home"></a>
      </td>
	   <td>
       <a href="update.php"><input type=button value="Create Record"></a>
      </td>
	  <td>
       <a href="add.php"><input type=button value="Read Record"></a>
      </td>
	  <td>
       <a href="add1.php"><input type=button value="Update Record"></a>
      </td>
	  <td>
       <a href="delete.php"><input type=button value="Delete Record"></a>
      </td>
	</ul>
	
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>  
    </ul>
	
  </div>
</nav>
<body>

  <header class="main">
    <div class="row">
         
	     <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <strong><?php echo $_SESSION['username']; ?></strong></p>
		 <?php endif ?> 
		</nav>
		</div>
		 </header><br>

<div id="main">
			
<br>
	<div class="row justify-content-center">
	<form action="process.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Please fill up</p>
		<div class="form-group">
			<label>firstname</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter your firstname" required >
		</div>
		<div class="form-group">
			<label>lastname</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter your lastname" required >
		</div>
		<div class="form-group">
			<label>address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter your address" required >
		</div>
		<div class="form-group">
			<label>contact no.</label>
			<input type="text" name="contact" class="form-control" value="<?php echo $contact;?>"placeholder="Enter your contact no." required >
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>
</body>
</html>