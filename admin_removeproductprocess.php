

<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");    
$id=$_GET['delete'];
$a=mysql_query("DELETE FROM product WHERE product_id = '".$id."'");
 header('refresh: 0; url=admin_homepage.php');


?>