<?php
require ('createaccount-header.php')
?>


<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");   

if(isset($_POST['submit'])){
  $mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");   

        mysql_query("UPDATE user set user_fname = 
          '".$_POST['fname']."', 
        user_mname = '".$_POST['mname']."',
        user_lname = '".$_POST['lname']."',
        user_address1 = '".$_POST['address']."',
        user_country = '".$_POST['country']."',
        user_mobile_phone = '".$_POST['mobilenumber']."',
        user_telephone = '".$_POST['telephonenumber']."',
        user_email = '".$_POST['email']."',
        user_name = '".$_POST['username']."',
        user_display_name = '".$_POST['displayname']."'
           WHERE user_id = '".$_POST['userid']."'");

        header ("refresh:0;url=admin_userlist.php");
      
}


if(isset($_GET['edit'])){
				$b = mysql_query("SELECT * FROM user WHERE user_id ='".$_GET['edit']."'");
				$br = mysql_fetch_assoc($b);

				echo "<br><br><br><br><center><form role='form' method='post' action=''>  


 <input type='hidden' name='userid' value='".$_GET['edit']."'>
        <label >First Name:</label>
  
<input type='text'   required name='fname'   placeholder='Full Name' value='".$br['user_fname']."'>
      

<br><br>
   <label >Middle Name:</label>
   <input type='text'   required name='mname'   placeholder='Full Name' value='".$br['user_mname']."'>
<br><br>
   <label >Last Name:</label>
   <input type='text'   required name='lname'   placeholder='Full Name' value='".$br['user_lname']."'>
<br><br>
  <label >Address:</label>
<input type='text'   required name='address'  placeholder='Address' value='".$br['user_address1']."'>
<br><br>
  <label >Country:</label>
  <input type='text'   required name='country'   placeholder='Full Name' value='".$br['user_country']."'>
<br><br>                
  <label >Mobile Number:</label>
  <input type='number' min='1'  required name='mobilenumber' placeholder='Contact Number' value='".$br['user_mobile_phone']."'>
<br><br>
  <label >Telephone Number:</label>
  <input type='text'   required name='telephonenumber'   placeholder='Full Name' value='".$br['user_telephone']."'>
<br><br>
  <label >Email:</label>
  <input type='email'  required name='email'  placeholder='Email' value='".$br['user_email']."'>       
<br><br>
  <label >User Name:</label>
  <input type='text'  required name='username'  placeholder='Email' value='".$br['user_name']."'>   
<br><br>
  <label >Display Name:</label>
  <input type='text'   required name='displayname'   placeholder='Full Name' value='".$br['user_display_name']."'>
<br><br>

  <div class='form-group col-lg-1 col-lg-offset-1'><br>
<button type='submit' name='submit' class='btn btn-info'>Submit</button> <a href='admin_homepage.php'> BACK </a> 
 </div>  
        </form>
        </center>
      </div>  
				</form><br><br><br><br><br>"; }

        ?>
