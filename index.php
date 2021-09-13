<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: homepage.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body  style="background-image: url('cafe.png');">
  <div class="header">
  	<h2 style="color:darkmagenta; font-family: Rockwell;">Home Page</h2>
  </div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	
<center> <button onclick="document.location='allmenu.php'">EDIT MENU</button> </center>
<center> <button onclick="document.location='namefood.php'">ADD FOOD</button> </center>
<center> <button onclick="document.location='adddrink.php'">ADD DRINK</button>
<center> <button onclick="document.location='namedessert.php'">ADD DESSERT</button> </center> 
<br>
</div>
<p> <a href="index.php?logout='1'" style="color: red; font-family: Times New Roman;">Logout</a> </p>
    <?php endif ?>

	<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>	
</body>
</html>