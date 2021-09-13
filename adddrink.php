

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

label { 
	color: black;
}

 {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: darksalmon;
opacity: 0.8;
}

/* Full-width input fields */
input[type=namedrink], input[type=price], input[type=cold] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=namedrink]:focus, input[type=price]:focus input[type=price]:cold{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

</style>
</head>

<body>
<ul>
  <li><a class="active"   
 href="menu.php">All Menu</a></li>
 <li><a href="homepage.php">Home</a></li>
 <li><a href="index.php">Edit Menu</a></li>
</ul>

</body>

<head>

<meta charset="utf-8">
<title>Pound Café</title>
<link rel="stylesheet" href="css/style.css" />

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body  style="background-image: url('cafe.png');">


<h1 style="text-align:center; font-size:300%;color: darkmagenta; font-family:Rockwell"><b>WELCOME TO POUND CAFE<b></h1>
<p style="text-align:center;font-style: italic; font-size:120%; color: firebrick; font-family:Rockwell;"><b> Food is the ingredient that binds us Together<b></p><br>



<?php
	require('cafe.php');//mysql connection
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['namedrink'])){
		
		
		$namedrink = stripslashes($_REQUEST['namedrink']);
		$namedrink = mysqli_real_escape_string($con,$namedrink);
		$price = stripslashes($_REQUEST['price']);
		$price = mysqli_real_escape_string($con,$price);
    $cold = stripslashes($_REQUEST['cold']);
		$cold = mysqli_real_escape_string($con,$cold);
		

	
        $query = "INSERT into `drink` ( namedrink, price, cold) VALUES ( '$namedrink',  '$price',  '$cold')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form' style='font-size:150%; font-family: Times New Roman; text-align:center;'><h3><mark>
            Add successfully!<mark></h3><br/>
			<a href='allmenu.php'><br>View Updated Record<br></a></div>";
        }
    }else{
?>

<br>
<p style="font-family:Times New Roman; font-size:150%; text-align:center;"><b>Add the menu<b></p>
<div class="container" style="text-align:left;" >

<form name="write" action="" method="post">

 
<label for="namedrink">Drink name:</label><br />
<input type="namedrink" name="namedrink" size="50" placeholder="Drink name" required /> <br>

<label for="price">Hot:</label><br />
<input type="price" name="price" size="50" placeholder="Hot" required /><br>

<label for="cold">Cold:</label><br />
<input type="cold" name="cold" size="50" placeholder="Cold" required /><br><br>

<input type="Submit" name="Submit" value="Add" />
</form>

<?php } ?></div>
<br>
<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p><!-- ownership -->
</body>
</html>
