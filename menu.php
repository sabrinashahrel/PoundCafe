
<?php
require('cafe.php');

?>
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
 href="verify.php">Staff Login</a></li>    
  <li><a href="menu.php">Menu</a></li>
 <li><a href="homepage.php">Home</a></li>
</ul>

</body>
<head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

table {
  font-family: Times New Roman;
  border: 1px  solid transparent;
   width: 50%;
 
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

thead {color:darkmagenta;}
tbody {color:midnightblue;}

td, th {
  border: 1px solid transparent;
  text-align: left;
  padding: 16px;
  margin-left: 50%; 
  margin-right: auto;
}
tr:nth-child(odd) {
  background-color:  almond;
}


tr:nth-child(even) {
  background-color: darksalmon;
}
 
p.main {
  text-align: justify;
  margin-left: 0%; 
  margin-right: 0%;
}

</style>
<meta charset="utf-8">
<title>Pound Cafe</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<style>

body {
  background-image: url('cafe.png');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
 
}
</style>

<h1 style="text-align:center; font-size:300%; color: darkmagenta;font-family:Rockwell">WELCOME TO POUND CAFE</h1>
}
<p style="text-align:center;font-style: italic; font-size:120%; color: firebrick; font: Rockwell"><b> Food is the ingredient that binds us Together<b></p><br>

<p style="text-align:center; font-size:180%; color: teal; font-family:Rockwell"> FOOD</p>

<img src="mains.JPG" alt="cafe" class="center" style="width:400px;height:300px;">


<table class="center" width="50%" border="2" style="border-collapse:collapse;"><br>
<thead>
<tr>
<th><strong> No.</strong></th>
<th><strong> Menu </strong></th>
<th><strong> Price</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from food ORDER BY id desc;"; //command to display food
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["namefood"]; ?></td>
<td align="center"><?php echo  $row["price"]; ?></td>

</tr>
<?php $count++; } ?>


</tbody>
</table>
<br>

<p style="text-align:center; font-size:180%;color: teal; font-family:Rockwell"> DRINK</p>

<img src="drinks.JPG" alt="cafe" class="center" style="width:400px;height:300px;">
<table class="center" width="50%" border="2" style="border-collapse:collapse;"><br>
<thead>
<tr>
<th><strong> No.</strong></th>
<th><strong> Menu </strong></th>
<th><strong> Price</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from drink ORDER BY id desc;"; //command to display drink
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["namedrink"]; ?></td>
<td align="center"><?php echo  $row["price"]; ?></td>

</tr>
<?php $count++; } ?>

</tbody>
</table>

<p style="text-align:center; font-size:100%; color: teal; font-family:Times New Roman; font-style: italic"> *Add on RM 1 for ice*</p>

<br>

<p style="text-align:center; font-size:180%; color: teal; font-family:Rockwell"> DESSERT</p>

<img src="desserts.JPG" alt="cafe" class="center" style="width:400px;height:300px;">
<table class="center" width="50%" border="2" style="border-collapse:collapse;"><br>
<thead>
<tr>
<th><strong> No.</strong></th>
<th><strong> Menu </strong></th>
<th><strong> Price</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from dessert ORDER BY id desc;"; //command to display drink
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["namedessert"]; ?></td>
<td align="center"><?php echo  $row["price"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
<br>

</div>

<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>
</body>
</html>