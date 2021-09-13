<?php include('server.php') ?>
<?php header('X-Frame-Options: DENY'); ?>
<!DOCTYPE html>
<html>
<title>Pound Café</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<!-- header -->
  <li><a class="active"  
 href="verify.php">Staff Login</a></li>    
  <li><a href="menu.php">Menu</a></li>
 <li><a href="homepage.php">Home</a></li>
</ul>

</body>

<style>
form{
	  display: block;
  margin-left: auto;
  margin-right: auto;
}
 div {
            padding: 10px 0;
			margin-left: 20%;
  margin-right: auto;
   float: left;
         }
	
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

table {
  font-family: monaco, monospace;
  border: 1px  solid transparent;
   width: 50%;
 
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

td, th {
  border: 1px solid transparent;
  text-align: left;
  padding: 16px;
  margin-left: 50%; 
  margin-right: auto;
}
tr:nth-child(odd) {
  background-color:  solid transparent;
}


tr:nth-child(even) {
  background-color:  solid transparent;
}
 
p.main {
  text-align: justify;
  margin-left: 0%; 
  margin-right: 0%;
}

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



<img src="pound.png" alt="cafe" class="center" style="width:1200px;height:500px;">

 <p style="text-align:center; font-size:180%; color: darkmagenta; font-family:Rockwell"> About Us</p>
<p  class="main" style="font-size:130%; text-align: center;"> 

<p style="text-align:center;font-style: italic; font-size:120%; font: Trebuchet MS"We in Pound Café offers a chill, minimalist environment for a café can offer. It is a place where handmade cuisine and quality are key. <br>
Inspired by cafe culture in South Korea and Paris, our cuisine is simple, made from scratch and locally sourced where possible. <br>
Unfussy plates made with market ingredients and contemporary style served in a relaxed cafe space. We are a place where you can sit <br>
down and enjoy a variety of coffee and desserts made by our professionally trained baristas and bakers. We have everything from classic <br>
coffee, our house made main dishes and beverages to eye candy desserts. We look forward to serving you here. </p><br>



<div class="center">
<form action="menu.php">
  
  <input class="center" type="image" src="menu2.png" alt="Submit" width="320" height="340">
</form>

</div>


<p class="right" style="font-size:120%;color: darkmagenta; font-family:Rockwell">OPENING TIMES<br>
<p class="right">Saturday to Thursday 10am - 10pm <br>
Closed Friday<br>
<br>
<p class="right" style="font-size:120%;color: darkmagenta; font-family:Rockwell">LOCATION<br>
<p class="right">59-1 Jalan Bangkung <br>
Kuala Lumpur <br>
59100<br>
<br>
<p class="right" style="font-size:120%;color: darkmagenta; font-family:Rockwell">CONTACT US<br>
<p class="right">Telephone: 03-22010725<br> info@poundcafe.com <br> @PoundKL on Instagram<br>

</p>
<br>
<p style="text-align:center; font-size:100%; color: black; font-family:Times New Roman"> &copy Pound Cafe 2021</p>
</body>
</html>