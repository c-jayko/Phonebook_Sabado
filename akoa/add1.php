<?php session_start();
include('process.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Create</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/style.css"><?php include('process.php');?>


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
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>UPDATE RECORD</h1></div>
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
		     <p><strong><?php echo $_SESSION['username']; ?></strong></p>
		 <?php endif ?> 
		</nav>
		</div>
		 </header><br><br>
		 

<div id="main">
			
	<?php require_once 'process.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
		$username=(isset ($_SESSION['username']));
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM data where userid='$userid'") or die($mysqli->error);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Contact List</h1></p></center>
					<tr>
						<th>firstname</th>
						<th>lastname</th>
						<th>address</th>
						<th>contact no.</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['firstname']?></td>
							<td><?php echo $row['lastname']?></td>
							<td><?php echo $row['address']?></td>
							<td><?php echo $row['contact']?></td>
							<td>
					
								<a href="process.php?delete=<?php echo $row['id'];?>" onclick="return  confirm('Are you sure you want to update?')"
									class="btn btn-primary">Update</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>

	
</div>
<br><br>

</body>
</html>