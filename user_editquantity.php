

<?php



if (isset($_GET['order']))

{
	$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");   

$query=mysql_query(" SELECT *
	FROM orderlist
	WHERE orderlist_id={$_GET['order']}

");

while($row=mysql_fetch_assoc($query)) {



echo "  <center> <br> <br> 
 <form method='post' action='user_editquantity.php'>
 <input type='hidden' name='id' value='{$row['product_id']}'>
  <input type='hidden' name='orderlistid' value='{$row['orderlist_id']}'>
Quantity : <input type='text' name='quant' value='{$row['product_qty']}'>
<input type='submit' name='submit'> 

";

}




}




if (isset($_POST['submit']))

{
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");   


$quantity=mysql_query("SELECT product_qty FROM product WHERE product_id={$_POST['id']} ");
$quant=mysql_result($quantity, 0);


if($quant < $_POST['quant']){
        
        echo "Input Quantity Exceeded! please input another value.";
         header('refresh: 5; url=user_addtocart.php');

        
       }
   else
{

$update=mysql_query("UPDATE orderlist SET product_qty={$_POST['quant']} WHERE product_id={$_POST['id']} && orderlist_id={$_POST['orderlistid']} ");

  header('refresh: 0; url=user_addtocart.php');

}

}







               	?>
