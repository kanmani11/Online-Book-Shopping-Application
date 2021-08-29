 <?php  
 include('dbconnects.php');  
 if(isset($_POST["save"]))  
 {  
 $book_name = $_POST['book_name'];
	 $author = $_POST['author'];
	 $publisher = $_POST['publisher'];
     $quantity = $_POST['quantity'];
	 $price= $_POST['price'];
      $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	  $description=$_POST['description'];
	  $category=$_POST['category'];
	  $fiction=$_POST['fiction'];
	  $nonfiction=$_POST['nonfiction'];
     
	   $sql = "INSERT INTO uploadbookdetails(book_name,author,publisher,quantity,price,name,description,category,fiction,nonfiction)
	 VALUES                  ('$book_name','$author','$publisher','$quantity','$price','$file','$description','$category','$fiction','$nonfiction')";
	 
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
fieldset {
  background-color: #eeeeee;
  display:inline-block;
  margin-top:50px;
  }
legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}
input {
  margin: 5px;
}
body{
text-align:center;
background-color:grey;
background-image:url("bg.jpg");
background-repeat:no-repeat;
background-position:center;
background-size: 1500px 1500px;}
</style>
</head><body>
	<form method="post" enctype="multipart/form-data" class="container">
	
	<fieldset>
		<legend>BOOK UPLOAD:</legend>
		<label for="bname">Book name:</label>
		<input type="text" name="book_name" required>
		<br><br>
		<label for="author">Author:</label>
		<input type="text" name="author" required>
		<br><br>
	    <label for="pub">Publisher:</label>
		<input type="text" name="publisher" required>
		<br><br>
		<label for="cgy" >Category:</label>
		<select class="form-control" name="category" required>
                      <option value="Fiction">Fiction</option>
                      <option value="Non-Fiction">Non-fiction</option>
         </select>
		<br><br>
		<label for="fiction">Fiction:</label>
		<select  class="form-control1" name="fiction" >
		<option value="-" >-</option>
					  <option value="Fantasy" >Fantasy</option>
					  <option value="Romance">Romance</option>
					  <option value="Romance">Science Ficction</option>
					  <option value="Romance">Horror</option>
					  <option value="Romance">Children Fiction</option>
					  </select><br><br>
						[OR]<br><br>
		<label for="nonfiction">Non-Fiction:</label>
		<select  class="form-control1" name="nonfiction" >
		<option value="-" >-</option>
					  <option value="Fantasy" >History</option>
					  <option value="Romance">Romance</option>
					  <option value="Romance">Science Ficction</option>
					  <option value="Romance">Horror</option>
					  <option value="Romance">Children Fiction</option>
					  </select><br><br>
			
						
		<label for="qua">Quantity:</label>
		<input type="text" name="quantity" required>
		<br><br>
		<label for="price">Price:</label>
		<input type="text" name="price" required><br><br>
		<label for="image">Image:</label>
		<input type="file" name="image" id="image" required />  
        <br /><br>  
         <label for="descc">Description:</label>
		 <input type="text" name="description" required>
		<br><br>
		
	     <input type="submit" name="save" id="submit" value="SUBMIT" class="btn btn-info" />  <br><br>
					 
	</fieldset>		
     </form>  
</body>
</html>
  
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
 