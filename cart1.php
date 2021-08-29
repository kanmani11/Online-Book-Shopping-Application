<?php
session_start();

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
foreach($_SESSION["shopping_cart"] as $key => $value) {
if($_POST["code"] == $key){
unset($_SESSION["shopping_cart"][$key]);
$status = "<div class='box' style='color:red;'>
Product is removed from your cart!</div>";
}
if(empty($_SESSION["shopping_cart"]))
unset($_SESSION["shopping_cart"]);
}
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
 
}
?>

<html>
<head>
<title> Shopping Cart </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
 </head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Shopping Cart</h2>  

<?php

if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="#"><i class="fa fa-shopping-cart" style="font-size:35px;color:black"></i></a>Your Cart:
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
<table class="table" border="2">
<tbody>
<tr>

<td>ITEM IMAGE</td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td> TOTAL FAIR</td>

</tr>
<?php
foreach ($_SESSION["shopping_cart"] as $product){
?>

<td><img src='<?php echo $product["image"]; ?>' width="100%" height="100%" /></td>
<td><?php echo $product["bookname"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "RS.".$product["price"]; ?></td>
<td><?php echo "RS.".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>

<tr>
<td colspan="5" align="right">

<strong>TOTAL: <?php echo "Rs.".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>
<center><a href="doordelivery1.php"><input type="submit" value="BUY NOW"></a></input> </center>
<a href="welcome.php"><input type="submit" value="BACK TO HOME PAGE"></a></input>
  <?php
}else{
echo "<h3>Your cart is empty!<br>
Add something new</h3>";
}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br />

</div>
</body>
</html>