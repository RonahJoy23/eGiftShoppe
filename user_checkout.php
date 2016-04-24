<?php


session_start();
?>

<?php 
 if( $_SESSION['logged']==0 ||$_SESSION['user_category_type']!=2)
  {
    
      header('refresh: 0; url=index.php');
  }

?>



<?php
    
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");   
$querys=mysql_query("SELECT * FROM orderlist WHERE customer_id={$_SESSION['user_id']} && flag=0 ");

 while($rows=mysql_fetch_assoc($querys))

mysql_query("INSERT INTO  orders(product_id,product_name,product_price,customer_id,product_qty_ordered) 
	VALUES('$rows[product_id]','$rows[product_name]','$rows[product_price]','$rows[customer_id]','$rows[product_qty]') 


");









$query=mysql_query("SELECT * FROM orderlist WHERE customer_id={$_SESSION['user_id']} && flag=0 ");

while ($row=mysql_fetch_assoc($query)){

mysql_query(" UPDATE product 
	SET product_qty=product_qty - '$row[product_qty]'


	WHERE product_id ='$row[product_id]' ");


mysql_query("UPDATE orderlist SET flag=1 WHERE customer_id={$_SESSION['user_id']}");

}
	




header ('refresh:0;user_homepage.php');







?>