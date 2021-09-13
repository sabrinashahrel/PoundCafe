<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pound Café</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body  style="background-image: url('cafe.png');">
  <div class="header">


  	<h2 style="color:darkmagenta; font-family: Rockwell;">Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		 <p style="color:darkcyan; font-family: Times New Roman;"> USERNAME </p>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<p style="color:darkcyan;font-family: Times New Roman;">PASSWORD</p>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<a href="register.php">Sign up</a>
  	</p>
  </form>


<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>
</body>
</html>