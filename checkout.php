<?php


session_start();
?>

<?php 
 if( $_SESSION['logged']==0 ||$_SESSION['user_category_type']!=2)
  {
    
      header('refresh: 0; url=index.php');
  }

?>
           
           <?php      if(isset($_GET['id'])){
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");   
     
 $query= mysql_query("SELECT * FROM product WHERE product_id={$_GET['id']}")  or die(mysql_error()) ;
      while($fetch=mysql_fetch_assoc($query)){
     echo "  <form method='post' action='user_addtocart.php'>

           <input type='hidden' name='productid' value='{$fetch['product_id']}'>

           <input type='hidden' name='productname' value='{$fetch['product_name']}'>
            
               <input type='hidden' name='productprice' value='{$fetch['product_price']}'>
               <center> <br><br><br>
                  <input type='number' min='1' max='999' name='productqty' >
                  <input type='submit' name='submit'> ";



      }
}

      	?>
