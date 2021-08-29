<?php
session_start();
$status="";
?>
<html>
<head>
<title> ORDERS </title>
<style>
body
{
margin-left:-950px;
}

</style>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">
<center><h2>Your orders</h2>   </center>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<?php
}
?><?php
include 'dbconnects.php';
$records = mysqli_query($conn,"select * from orderdetails"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<h2 >Delivery Details</h2>
<h3 style="color:orange">Customer Name:<?php echo $data['fname']?><br/>
Contact Number:<?php echo $data['no']?><br>
ADDRESS:
<?php echo $data['dno']?>,
<?php echo $data['str']?>,
<?php echo $data['city']?><br/>
Pincode<?php echo $data['pincode']?><br/><br/><br/></h3>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>

<b><?php echo $product["bookname"]; ?></b>
<img src='<?php echo $product["image"]; ?>' width="150px" height="150px" />

<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />

</form>

<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>

<tr>
<td colspan="5" align="right">

<strong>ORDER TOTAL: <?php echo "Rs.".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>	
<h4><center>YOUR ORDER WILL RECIEVE IN 3-5 WORKING DAYS!</center></h4>


  <?php
}else{
	echo "<h3>You don't have any orders please order!<br>
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