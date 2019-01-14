<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
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
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>HOME</h1></div>
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
	
              <a href="index.php?logout='1'" button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>  
    </ul>
	
  </div>
</nav>
<body>

  <header class="main">
    <div class="row">
     <nav class="col-sm-8 text-right"> 	 
         
	     <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		    <strong><?php echo $_SESSION['username']; ?></strong></p>
		 <?php endif ?> 
		</nav>
		</div>
		 </header>
	<br>


</body>
</html>