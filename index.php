<?php
session_start();
include('dbconnects.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
      $bookname = $row['bookname'];
      $code = $row['code'];
     $price = $row['price'];
     $image = $row['image'];

$cartArray = array(
$code=>array(
'bookname'=>$bookname,
'code'=>$code,
'price'=>$price,
'quantity'=>1,
'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
$_SESSION["shopping_cart"] = $cartArray;
$status = "<div class='box'>Product is added to your cart!</div>";
}else{
$array_keys = array_keys($_SESSION["shopping_cart"]);
if(in_array($code,$array_keys)) {
$status = "<div class='box' style='color:red;'>
Product is already added to your cart!</div>";
} else {
$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
$status = "<div class='box'>Product is added to your cart!</div>";
}

}
}
?>
<html>
<head>
<style>
body{
    text-align:center;
    margin-top:50px;
}
.price
{
    color:blue;
}
.buy
{
    background-color:lime;
    font-size:16px;
}
.buynow
{
    background-color:lime;
    font-size:16px;
}
</style>
<title>Cart</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<?php
}
 $id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM `products` where id=".$id."");
while($row = mysqli_fetch_assoc($result)){
echo "<div class='product_wrapper'>
 <form method='post' action=''>
 <input type='hidden' name='code' value=".$row['code']." />
 <div class='image'><img src='".$row['image']."' /></div></br>
 <div class='bookname'>".$row['bookname']."</div></br>

   <div class='price'>Rs:".$row['price']."</div></br>
 <button type='submit' class='buy'>ADD TO CART</button>
 
 </form>
   </div>";
        }
mysqli_close($conn);
?>
<button class="buynow"><a href="doordelivery1.php">BUY NOW</a></button>
<button class="buynow"><a href="cart1.php">VIEW CART</a></button>
<div style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div><br /><br />
</div>
</body>
</html>