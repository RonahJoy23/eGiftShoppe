<?php

include ('user_header.php');


?>

<body>


<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");  

$query=mysql_query("SELECT order_id,product_id,product_price,product_qty_ordered,product_name,product_price*product_qty_ordered 
      AS price 
      FROM orders 
      WHERE  order_id={$_GET['id']} ");


if($row=mysql_fetch_assoc($query)) 

{



?>

<br><br><br><br>
<form class="form-horizontal" role="form" >
 
<label class="col-sm-2 control-label">Invoice ID : </label>
  <p class="form-control-static"><?php echo $row['order_id'];  ?></p>
    
<label class="col-sm-2 control-label">Customer Name : </label>
  <p class="form-control-static"><?php echo $_SESSION['user_fname']; ?> <?php echo $_SESSION['user_mname']; ?> <?php echo $_SESSION['user_lname']; ?> </p>
 
<label class="col-sm-2 control-label">Address : </label>
   <p class="form-control-static"><?php echo $_SESSION['user_adress1'];  ?></p>
   
<label class="col-sm-2 control-label">Telephone Number : </label>
  <p class="form-control-static"><?php echo $_SESSION['user_telephone'];  ?></p>
       
<label class="col-sm-2 control-label">Mobile Number : </label>
  <p class="form-control-static"><?php echo $_SESSION['user_mobile_phone'];  ?></p>
  

<div class="form-group">
<label class="col-sm-2 control-label">Order :  </label>
 <div class="col-sm-8" >
    

 <div class="bs-example">
     <br><br>
      <table class="orderinfo-table" border="1">
      <thead>
        <tr>
          <th>Product #</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $row['product_id'];  ?></td>
          <td><?php echo $row['product_name'];  ?></td>
          <td><?php echo $row['product_price'];  ?></td>
          <td><?php echo $row['product_qty_ordered'];  ?></td>
        </tr>
         <tr>
          <td> </td>
          <td> </td>
          <td>Total : P <?php echo number_format($row['price']);?></td>
          <td><?php echo $row['product_qty_ordered'];  ?></td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->

 
</form>
<?php
}
else { 


echo " ";

}
?>
    <br>
<a href="user_invoice.php">
<button type="button" class="btn btn-primary">Back</button></a>
<br>
</div>

<?php
include ('footer.php');
?>