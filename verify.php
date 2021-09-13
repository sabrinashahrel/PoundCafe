<?php include('server.php') ?>
<?php header('X-Frame-Options: DENY'); ?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: purple;
}
li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: darksalmon;
}
</style>
</head>

<body>
<ul>
  <li><a class="active"     
   href="menu.php">Menu</a></li>
 <li><a href="homepage.php">Home</a></li>
</ul>

</body>

<style>
body {
  background-image: url('cafe.png');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
 
}
</style>
<h1 style="text-align:center; color: darkmagenta; font-size:250%; font-family:Rockwell">WELCOME TO POUND CAFE</h1>
<p style="text-align:center;font-style: italic; font-size:120%; color: firebrick; font: Rockwell"><b> Food is the ingredient that binds us Together<b></p><br>
<center><p>Please enter the pin</p> 
<form action="checkpass.php" method="POST"> 
<input type="password" name="pass"> 
<input type="submit" name="submit" value="Submit"> </center>
</form>

<br>
<center><img src="pound.png" alt="cafe" class="center" style="width:700px;height:400px;"> </center>

<br>
<br>

<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>
</html>