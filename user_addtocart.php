
<?php
require ('user_header.php')
?>
        <?php

           

    if(isset($_POST['submit'])){
     
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");   
 
     
 $a = mysql_query("SELECT * FROM orderlist WHERE product_id={$_POST['productid']} && flag=0 ");
        if(mysql_num_rows($a)>0){
          echo "<br> <br> <br>ITEM ALREADY EXIST IN YOUR CART PLEASE CHECK YOUR CART OR SELECT ANOTHER ITEM!";    exit();

        }
                  
                
                 

                $productid=$_POST['productid'] ;
                 $productname=$_POST['productname'];
                $productprice=$_POST['productprice'];
                $productqty=$_POST['productqty'];
                $flag=0;
                $user=$_SESSION['user_id'];


            
                 
                 $con=mysqli_connect("localhost","root","","eGiftShoppe") ;
                 
             
                
                if(mysqli_connect_errno())
                {
      
                
                echo "<br/>DATABASE UNAVAILABLE";
                exit();
                }else
                         {
               //0 means false - no error
                echo "<br/> ";
                
                $sqlstmt="insert into orderlist(product_id,product_name,customer_id,product_qty,product_price,flag) values(?,?,?,?,?,?)";
                 
                 
                
                
                $stmt=$con->prepare ($sqlstmt);
                $stmt->bind_param('ssssss',$productid,$productname,$user,$productqty,$productprice,$flag);
                $stmt->execute();   
                          
                          }
                 
                 

}
                 else
                 {
                echo " ";
                  }


              ?>
                
  <table class="orderinfo-table">
                     <ul>

                      <tr>
                        <th>Product ID</th>
                        <th>Product name</th>
                       
                       
                        <th>Qty. Ordered</th>
                        <th>Price Per Item</th>
                        <th>Total Price</th>
                        <th>Edit Cart</th>
                      
                      </tr> 
                         <?php    

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");    

            $b = mysql_query("SELECT orderlist_id,product_id,product_name,product_qty,product_price,flag,product_qty*product_price AS price FROM orderlist WHERE flag=0 "); $sum=0;
               while($br = mysql_fetch_assoc($b) ){

                    echo "  <tr>
                    
                        <td>{$br['product_id']}</td>
                        <td>{$br['product_name']}</td>
                       
        <td>{$br['product_qty']}</td>  
               <td>{$br['product_price']}</td>          
        <td>{$br['price']}</td>

        <td>
              <a href='user_deleteorderlist.php?delete={$br['orderlist_id']}'><button type='button' class='btn btn-default'>Delete</button></td>
                       
    





                      
                      </tr>
                      
              ";   ?>    



              <?php

 $sum= $sum + $br['price']; 







    }  echo '
</table>';
    ?>



 
  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
 
     <?php  echo"Total Price : P"; echo number_format($sum); ?>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     

<button type='submit' class='btn btn-default'name='submit'><a href="user_checkout.php">Solve Out </a></button> 
                     
      </ul>  
                    </table>
                    
               
              </div>
            </div>
            </section>
          
      
        
          
      
          
       
          
          
          <!-- Tag Cloud -->
        
            <div class="col-lg-12 col-md-12 col-sm-12">
              
              
              
            
                
            </div>
            
          </div>
          <!-- /Tag Cloud -->
          
          
      
      



<?php 
require ('footer.php');


 ?>