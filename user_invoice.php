<?php
include ('user_header.php');
?>
<br><br><br><br>
<center><h1>INVOICE</h1></center>
 <table class="orderinfo-table">
        <thead>
          <tr>
            <th>Line No.</th>
            <th>Product Description</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Amount Due</th>
            <th>Edit Orderlist</th>

          
          </tr>
        </thead> 

     <?php   

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");  

     $b = mysql_query("SELECT order_id,product_id,product_price,product_qty_ordered,product_name,product_price*product_qty_ordered 
      AS price 
      FROM orders 
      WHERE customer_id={$_SESSION['user_id']}");
             

               while($br =mysql_fetch_assoc($b) ){


              


?>

        
          <tr>
            <td><?php echo $br['order_id']; ?></td>
            <td><?php echo $br['product_name'];?></td>
            <td><?php echo $br['product_price'];?></td>
             <td><?php echo $br['product_qty_ordered'];?></td>
             <td>P <?php echo number_format($br['price']);?></td>
               <td><?php echo "<button type='button' class='btn btn-default'><a href='user_viewinvoice.php?id={$br['order_id']}'>View Full Info</a></button>&nbsp;&nbsp;&nbsp;
              ";?></td>
    <?php   } ?>
</tr>
</table>
<br><br>
<?php
include ('footer.php');

?>