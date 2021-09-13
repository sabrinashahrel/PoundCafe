<?php
require('cafe.php'); //mysql connection

$id=$_REQUEST['id'];
$query = "SELECT * from drink where id='".$id."'"; 
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
input[type=namedrink], input[type=price], input[type=cold]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=namedrink]:focus, input[type=price]:focus, input[type=cold]:focus {
  background-color: #ddd;
  outline: none;
}

</style>
<meta charset="utf-8">
<title>Edit Drink</title>
<link rel="stylesheet" href="css/style.css" />

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


<h1 style="text-align:center; font-size:300%;color: darkmagenta; font-family:Rockwell"><b>WELCOME TO POUND CAFE<b></h1>
<p style="text-align:center;font-style: italic; font-size:120%; color: firebrick; font-family:Rockwell;"><b> Food is the ingredient that binds us Together<b></p><br>

<!-- php command to edit drink -->
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$namedrink =$_REQUEST['namedrink'];
$price =$_REQUEST['price'];
$cold =$_REQUEST['cold'];
$update="update drink set 

namedrink='".$namedrink."', 
price='".$price."',
cold='".$cold."'
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

<label for="namedrink">Drink:</label>
<p><input type="namedrink" name="namedrink" size="50" placeholder="Drink" required value="<?php echo $row['namedrink'];?>" /></p>

<label for="price">Price:</label>
<p><input type="price" name="price" size="50" placeholder="Price" required value="<?php echo $row['price'];?>" /></p>

<label for="cold">Cold:</label>
<p><input type="cold" name="cold" size="50" placeholder="Cold" required value="<?php echo $row['cold'];?>" /></p>


<p><input name="submit" type="submit" value="Update" /></p>

<?php } ?>
</div>
</div>

<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>
</body>
</html>