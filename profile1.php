 <?php  
 include('dbconnects.php');  
 if(isset($_POST["save"]))  
 {  
 $fullname = $_POST['fullname'];
$age = $_POST['age'];
$gender= $_POST['gender'];
     $address = $_POST['address'];
$gmail= $_POST['gmail'];
     $phoneno= $_POST['phoneno'];
     
  $sql = "INSERT INTO profile(fullname,age,gender,address,gmail,phoneno)
VALUES                  ('$fullname','$age','$gender','$address','$gmail','$phoneno')";

      if(mysqli_query($conn, $sql))  
      {  
           echo '<script>("Book Inserted into Database")</script>';  
      }   mysqli_close($conn);
 }
 
 ?>
 
 <!DOCTYPE html>
<html>
<head><title>BOOK UPLOAD</title>
<style>
body{
	background-color: #454545 ;
}
fieldset {
  background-color: #eeeeee;
  display:inline-block;
 
 
}

legend {
  background-color:black;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 10px;
}
body{
text-align:center;}
</style>
</head><body>
<form method="post" enctype="multipart/form-data" class="container">

<fieldset>
<legend>PROFILE:</legend>
<label for="bname">FULL NAME:</label>
<input type="text" name="fullname" required>
<br><br>
<label for="author">AGE:</label>
<input type="text" name="age" required>
<br><br>
   <label for="pub">GENDER:</label>
<input type="text" name="gender" required>
<br><br>



<label for="qua">ADDRESS:</label>
<input type="text" name="address" required>
<br><br>
<label for="price">EMAIL:</label>
<input type="text" name="gmail" required><br><br>

         <label for="descc">MOBILE NUMBER:</label>
<input type="text" name="phoneno" required>
<br><br>

    <input type="submit" name="save" id="submit" value="SUBMIT" class="btn btn-info" />  <br><br>

</fieldset>
     </form>  
</body>
</html>