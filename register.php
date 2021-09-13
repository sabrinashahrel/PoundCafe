<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pound Café</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  style="background-image: url('cafe.png');">
  <div class="header">
  	<h2 style="color:darkmagenta; font-family: Rockwell;">Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="color:darkcyan; font-family: Rockwell;"> Username </label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color:darkcyan; font-family: Rockwell;"> Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color:darkcyan;font-family: Rockwell;"> Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label style="color:darkcyan;font-family: Rockwell;"> Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  	      <a href="login.php">Sign in</a>
  	</p>
  </form>

<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>
</body>
</html>