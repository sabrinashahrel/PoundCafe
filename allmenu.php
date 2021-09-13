
<?php
require('cafe.php');//mysql connection
//include("auth.php");
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
 href="index.php">Add Menu</a></li>    
  <li><a href="menu.php">Menu</a></li>

</ul>

</body>

<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

table {
  font-family: Times New Roman;
  border: 1px  maroon;
   width: 50%;
 
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

thead {color:darkmagenta;}
tbody {color:midnightblue;}

table, td, th {
  border: 1px maroon;
  text-align: left;
  padding: 16px;
  margin-left: 50%; 
  margin-right: auto;
}
tr:nth-child(odd) {
  background-color:  almond;
}


tr:nth-child(even) {
  background-color:  darksalmon;
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
<body  style="background-image: url('cafe.PNG'); background-attachment: fixed;">


<h1 style="text-align:center; font-size:300%; color: darkmagenta;font-family:Rockwell">WELCOME TO POUND CAFE</h1>
}
<p style="text-align:center;font-style: italic; font-size:120%; color: firebrick; font: Rockwell"><b> Food is the ingredient that binds us Together<b></p><br>


<p style="text-align:center; font-size:180%; color:teal; font-family:Rockwell"> FOOD</p>

<img src="mains.JPG" alt="cafe" class="center" style="width:400px;height:300px;">

<!-- Table of food -->
<table class="center" width="50%" border="2" style="border-collapse:collapse; color: midnightblue;"><br>
<thead>
<tr>
<th><strong> No.</strong></th>
<th><strong> Menu </strong></th>
<th><strong> Price</strong></th>
<th><strong> Edit</strong></th>
<th><strong> Delete</strong></th>
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
<td align="center">
<a href="editfood.php?id=<?php echo $row["id"]; ?>">Edit</a><!-- go to edit page -->
</td>
<td align="center">
<a href="deletefood.php?id=<?php echo $row["id"]; ?>">Delete</a><!-- go to delete page -->
</td>
</tr>
<?php $count++; //number increase starting from 1 and above
 } ?>
</tbody>
</table>

<br>
<p style="text-align:center; font-size:180%; color:teal; font-family:Rockwell"> DRINK</p>

<img src="drinks.JPG" alt="cafe" class="center" style="width:400px;height:300px;">
<!-- Table of drink -->
<table class="center" width="50%" border="2" style="border-collapse:collapse; color: midnightblue;"><br>
<thead>
<tr>
<th><strong> No.</strong></th>
<th><strong> Menu </strong></th>
<th><strong> Hot</strong></th>
<th><strong> Cold</strong></th>
<th><strong> Edit</strong></th>
<th><strong> Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from drink ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["namedrink"]; ?></td>
<td align="center"><?php echo  $row["price"]; ?></td>
<td align="center"><?php echo  $row["cold"]; ?></td>
<td align="center">
<a href="editdrink.php?id=<?php echo $row["id"]; ?>">Edit</a> <!-- go to edit page -->
</td>
<td align="center">
<a href="deletedrink.php?id=<?php echo $row["id"]; ?>">Delete</a> <!-- go to delete page -->
</td>
</tr>
<?php $count++;  //number increase starting from 1 and above 
}?>


</tbody>
</table>
<br>


<p style="text-align:center; font-size:180%;  color:teal;  font-family:Rockwell"> DESSERT</p>

<img src="desserts.JPG" alt="cafe" class="center" style="width:400px;height:300px;">
<!-- Table of dessert -->
<table class="center" width="50%" border="2" style="border-collapse:collapse; color: midnightblue;"><br>
<thead>
<tr>
<th><strong> No.</strong></th>
<th><strong> Menu </strong></th>
<th><strong> Price</strong></th>
<th><strong> Edit</strong></th>
<th><strong> Delete</strong></th>
</tr>
</thead>
<tbody>

<?php
$count=1;
$sel_query="Select * from dessert ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["namedessert"]; ?></td>
<td align="center"><?php echo  $row["price"]; ?></td>
<td align="center">
<a href="editdessert.php?id=<?php echo $row["id"]; ?>">Edit</a> <!-- go to edit page -->
</td>
<td align="center">
<a href="deletedessert.php?id=<?php echo $row["id"]; ?>">Delete</a> <!-- go to delete page -->
</td
</tr>
<?php $count++; //number increase starting from 1 and above 
 } ?>
</tbody>
</table>
<br>

</div>
<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p> 
</body>

</html>
