	
<?php



$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");    

if(isset($_GET['edit'])){
				$b = mysql_query("SELECT * FROM product WHERE product_id ='".$_GET['edit']."'");
				$br = mysql_fetch_assoc($b);

			echo "
<center>  
<form   method='post'>
<p>Product Name</p><input type='text' name='productname' value='{$br['product_name']}'/> <br>
<br><p> Product Price </p><input type='number' min='1' max='9999' name='productprice' value='{$br['product_price']}' /> <br>
<br><p> Product Quantity Available </p><input type='number' min='1' max='999' name='productquantityavailable' value='{$br['product_qty']}' /> <br>

<input type='hidden' name='productid' value={$br['product_id']}/> <br>
<br><br>
<input type='submit' value='SAVE' name='submit'/> <a href='admin_homepage.php'> BACK </a> 
</form>
</center>

"
;}?>

<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftshoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong"); 
if(isset($_POST['submit'])){


        mysql_query("UPDATE product set product_name = '".$_POST['productname']."', 
          product_desc = '".$_POST['productdescription']."',
         product_price = '".$_POST['productprice']."', product_qty = '".$_POST['productquantityavailable']."'
          





           WHERE product_id = '".$_POST['productid']."'");


        header ("refresh:0;url=admin_homepage.php");
      
}

?>

