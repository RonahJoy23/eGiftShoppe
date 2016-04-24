<?php
require('admin_header.php');

?>
<br><br><br><br>
 <table>
        <thead>
          <tr>
           
            <th><center>Name</center></th>
            <th><center>Address</center></th>
            <th><center>Mobile Number</center></th>
            <th><center>Email</center></th>
            <th><center>Country</center></th>
            <th><center>Username</center></th>
            <th><center>Display Name</center></th>         
          </tr>
        </thead> 

 <?php   

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Not Connected to database");
mysql_select_db($mysql_database, $bd) or die("some thing went wrong");    

     $b = mysql_query("SELECT *
      
      FROM user
      WHERE user_category_type=2");
             

    while($br =mysql_fetch_assoc($b) ){

?>

        
          <tr>
      
            <td><?php echo $br['user_gender'];?>. <?php echo $br['user_fname'];?> <?php echo $br['user_mname'];?> <?php echo $br['user_lname'];?></td>
            <td><?php echo $br['user_address1'];?></td>
            <td><?php echo $br['user_mobile_phone'];?></td>
            <td><?php echo $br['user_email'];?></td>
            <td><?php echo $br['user_country'];?></td>
            <td><?php echo $br['user_name'];?></td>
            <td><?php echo $br['user_display_name'];?></td>
            <td><?php echo "<a href='admin_editusersprocess.php?edit={$br['user_id']}'><button type='button' class='btn btn-primary'>Edit</button></a>&nbsp;&nbsp;&nbsp;
             
";?>
 <td>
     <?php echo "<a href='admin_removeusers.php?delete={$br['user_id']}'><button type='button' class='btn btn-danger'>Delete</button></a>&nbsp;&nbsp;&nbsp;";?>
            
 </td>
    <?php   } ?>
</tr>
</table>
<br>
<br>