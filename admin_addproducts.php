<?php

session_start();


?>

<?php 
 if( $_SESSION['logged']==0 ||$_SESSION['user_category_type']!=1)
  {
    
      header('refresh: 0; url=index.php');
     
  }

?>
<center>
    <br>
    <br>
    <br>
<form    method="post">
<input type="text" name="productname" placeholder="product name"/> <br><br>
<input type="text" name="productdescription" placeholder="product description"/> <br><br>
<input type="number" min="1" max="9999" name="productprice" placeholder="price"/> <br><br>
<input type="number"  min="1" max="9999" name="productquantityavailable" placeholder="quantity available" /> <br>



<br>
<input type="submit" value="SAVE" name="submit" />
<a href="admin_homepage.php"> BACK </a> 
</form> 
</center>


 

<?php 
if ( isset( $_POST['submit'] ) ) 
{     
$productdesc = $_POST['productdescription'];
$productname = $_POST['productname'];
$productprice = $_POST['productprice'];
$productquantityavailable=$_POST['productquantityavailable'] ;
$con=mysqli_connect("localhost","root","","eGiftShoppe") ;
                  if(mysqli_connect_errno())
                {
               
              
                exit();
                }else
                         {
              
                           
                          }
$sqlstmt="insert into product(product_name,product_price,product_qty,product_desc) values(?,?,?,?)";
                $stmt=$con->prepare ($sqlstmt);
                $stmt->bind_param('ssss', $productname,$productprice,$productquantityavailable,$productdesc);
                $stmt->execute();  
  header('refresh: 6; url=admin_homepage.php');
   
  echo "Successfully Added!";
  
  
 
} ?> 


