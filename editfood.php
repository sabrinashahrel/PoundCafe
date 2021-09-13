<?php
require('cafe.php');//mysql connection

$id=$_REQUEST['id'];
$query = "SELECT * from food where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
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
 href="menu.php">All Menu</a></li>
 <li><a href="homepage.php">Home</a></li>
 <li><a href="index.php">Edit Menu</a></li>
</ul>

</body>
<head>
<style>
label{
  color:black;
}
body {
  background-image: url('cafe.png');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  font-size:150%;
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
input[type=folder], input[type=tittle], input[type=message], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=folder]:focus, input[type=tittle]:focus, input[type=message]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.status{
	font-size:150%; text-align:center;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
<meta charset="utf-8">
<title>Edit Food</title>
<link rel="stylesheet" href="css/style.css" />

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


<h1 style="text-align:center; font-size:300%;color: darkmagenta; font-family:Rockwell"><b>WELCOME TO POUND CAFE<b></h1>
<p style="text-align:center;font-style: italic; font-size:120%; color: firebrick; font-family:Rockwell;"><b> Food is the ingredient that binds us Together<b></p><br>

<!-- php command to edit dessert -->
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$namefood =$_REQUEST['namefood'];
$price =$_REQUEST['price'];
$update="update food set 

namefood='".$namefood."', 
price='".$price."'
where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error()); 

//status response
$status = "Record Updated Successfully. </br></br>Thank You</br></br>
<a href='allmenu.php'>View Updated Record</a>";
echo '<p style="color:#FF0000; font-size:110%; font-family: Times New Roman; text-align:center;">'.$status.'</p>'; 
}else {
?>

<!-- Edit form -->
<div class="container" style="text-align:left;" >

<form name="editsearch" action="" method="post">

<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<label for="namefood">Food:</label>
<p><input type="namefood" name="namefood" size="50" placeholder="Food" required value="<?php echo $row['namefood'];?>" /></p>

<label for="price">Price:</label>
<p><input type="price" name="price" size="50" placeholder="Price" required value="<?php echo $row['price'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>

<?php } ?>
</div>
</div>

<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>
</body>
</html>