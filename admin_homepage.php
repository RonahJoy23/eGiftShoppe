<?php
require ('admin_header.php')
?>
								
	<table class="orderinfo-table">
        
								<ul>
                                      <tr>
												<th>Product ID</th>
												<th>Product Name</th>
												<th>Price</th>
												<th>Quantity Available</th>
												<th>Edit </th>
												<th>Delete </th>
								     </tr> 
<?php    

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");    

            $b = mysql_query("SELECT * FROM product WHERE flag=0 ");
               while($br = mysql_fetch_assoc($b) ){

										echo "	<tr>
										
												<td>{$br['product_id']}</td>
												<td>{$br['product_name']}</td>
												<td>{$br['product_price']}</td>
												<td>{$br['product_qty']}</td>
                                                
												<td><center><a href='admin_editproductsprocess.php?edit={$br['product_id']}'><i class='icons icon-pencil-2'></i></a></center></td>
												<td><center><a href='admin_removeproductprocess.php?delete={$br['product_id']}'><i class='icons icon-trash-2'></i></a></center></td>
											
											</tr>
											
							"; }	?>		
        </ul>
										</table>
				  