<!DOCTYPE html>
<html>
<head><title>WELCOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image:url("books1.jpg");
background-repeat: no-repeat;
background-attachment: fixed;  
background-size: cover;

  
}

.row-one, row-two {
	display: inline-block;
}
	

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: red;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: grey;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.container{
float:left;
padding: 60px;
}
.last-column {
	padding-right: 0 !important;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
{
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 15px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: lime;
  
}

form.example button {
  float:center-right;
  width: 10%;
  padding: 10px;
  background:pink;
  color: white;
  font-size: 15px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  
}

form.example button:hover {
  background: lime;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.image{
margin-right:500px;
margin-top:150px;
width:50%;
color:red;
}
.image1{
margin-right:250px;

width:50%;
color:red;
}
div.gallery {
  margin-left: 350px;
  margin-top:125px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
  height:25px;
}

div.gallery:hover {
  border: 1px solid red;
}

div.gallery img {
  width: 100%;
  height: auto;
}


div.gallery1{
  margin-left: 150px;
  margin-top:125px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
  color:yellow;
}

div.gallery1:hover {
  border: 1px solid red;
}

div.gallery1 img {
  width: 100%;
  height: auto;
}

.cart_div{
	background-color:pink;
	float: right;
    width: 35px;
    height: 35px;
    position: relative;
    top: -25px;
    right: 100px;
}
.cart_div .icon {
	position: relative;
    top: 3px;
}


.header-text {
	font-size: 40px;
	text-align: center;
	color: purple;
}
.my-5{
color:green;
font-size:25px;}
.avatar {
  vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
	</style>
</head>
<body>
<header>
		<div class="header-text"> BOOKS INFINITY </div>
		<div class="cart_div"><a  class="icon" href="cart1.php" target="middle6.html" width="25%" height="25%"><img src="cart.png"></a>
		</div>
</header>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center><img src="avatar.png" alt="Avatar" class="avatar"></center>
  <a href="profile1.php">Profile</a>
  <a href="orders.php">View orders</a>
  <a href="bookupload.php">Upload  books</a>
  <a href="cart1.php">View cart</a>
 <a href="resetpwd.php">Reset password</a>
  <a href="signup.php">Sign out</a>
  </div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; HOME</span>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search here.." name="search2">
 </form>
  <?php
// Initialize the session
session_start();
 ?>
<center><h5 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h5></center>
</body>
</html>
</form>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="row-one">
	<div class="container"><img src="mini/fantasy.jpg" alt="Forest" width="250" height="250">
    <center><a href="fantasy.html">FANTASY</a></div>
    <div class="container"><img src="mini/romance.jpg" alt="Forest" width="250" height="250">
    <center ><a href="romance.html">ROMANCE</a></div>
    <div class="container"><img src="mini/horror.jpg" alt="Forest" width="250" height="250">
    <center><a href="horror.html">Horror</a></div>
    <div class="container"><img src="mini/mystery.jpg" alt="Forest" width="250" height="250">
    <center><a href="mystery.html">MYSTERY</a></div>
</div>
<div class="row-two">
    <div class="container"><img src="mini/adventure.jpg" alt="tree" >
	<center><a href="adventure.html">ADVENTURE</center></a></div>
    <div class="container"><img src="mini/kids.jpg" alt="tree" >
	<center><a href="kids.html">KIDS</center></a></div>
	<div class="container"><img src="mini/science.jpg" alt="tree" >
	<center><a href="science.html">SCIENCE FICTION</center></a></div>
    <div class="container"><img src="mini/humour.jpg" alt="Forest" width="200" height="200">
   <center><a href="humour.html">HUMOUR</a></div>	
</div>
</div>
</body>
</html>

   
 
