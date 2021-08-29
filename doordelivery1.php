<?php  
 include('dbconnects.php');
 if(isset($_POST["save"]))  
 {  
 $fname = $_POST['fname'];
$no = $_POST['no1'];
$no1 = $_POST['no1'];
$dno= $_POST['dno'];
$str=$_POST['str'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
$cod=$_POST['cod'];
 
     
  $db = "INSERT INTO details(fname,no,no1,dno,str,city,pincode,state,cod)VALUES('$fname','$no','$no1','$dno','$str','$city','$pincode','$state','$cod')";

      if(mysqli_query($conn, $db))  
      {  
 
           echo '<script>"Your order is placed")</script>';  
      }   mysqli_close($conn);
 }
 
 ?>
 
 
 <!DOCTYPE html>
<html>
<head>

<style>
<style>
body {
  font-family: Arial;
  font-size: 5px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  .sh{
  margin-right:250px;
  }
 
 
</style>
</head>
<body>
<form method="post"  enctype="multipart/form-data" class="container">
<center><u>CHECK OUT</u></center>
<p><b>Delivery Details:</b></P>

<label for="bname">CUSTOMER NAME:</label>
<input type="text" name="fname" required>
<br><br>
<label for="pub">CONTACT NO</label>
<input type="text" name="no" required>
<br><br>
<label for="qua">ADDITIONAL NO</label>
<input type="text" name="no1" required>
<br><br>
<label for="price">DOOR NO</label>
<input type="text" name="dno" required><br><br>
<label for="descc">STREET</label>
<input type="text" name="str" required>
<br><br>
<label for="dist">DISTRICT</label>
<input type="text" name="city" required>
<br><br>
<label for="dist">PINCODE</label>
<input type="text" name="pincode" required>
<br><br>
<label for="descc">STATE</label>
<input type="text" name="state" required>
<br><br>

  <p> Select your payment method:</p>
  <input type="radio" id="cod" name="cod" value="cod">Cash on delivery</input></br>
  <input type="radio" id="op" name="cod" value="op"><a href="card.html">Online payment</a> </br>
 
 

  <br>  


<br><br>

    <input type="submit" name="save" id="submit" value="CHECK OUT" class="btn btn-info" />  <br><br>

     </form>

 
</body>
</html>