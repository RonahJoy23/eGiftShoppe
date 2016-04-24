

            <?php
                       if(isset($_POST['submit']))
            { 
           
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eGiftShoppe";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

         

                         $query= mysql_query("SELECT * FROM user WHERE user_name='".$_POST['username']."' ");
                           if(mysql_num_rows($query)>0){

                               echo "Username Already Exist Please select another username <br> you will be redirected in 8 seconds"; header("refresh:8;url=register.php");   exit();
                           }

                           else {
                            
                                $email=$_POST['email'];
                                $username=$_POST['username'];
                                $display_name=$_POST['display_name'];
                                $password=$_POST['password'];
                                $gender=$_POST['gender'];
                                $fname=$_POST['fname'];
                                $mname=$_POST['mname'];
                                $lname=$_POST['lname'];
                                $address=$_POST['address'];
                                $zip=$_POST['zip'];
                                $city=$_POST['city'];
                                $country=$_POST['country'];
                                $telephone=$_POST['telephone'];
                                $cellphone=$_POST['cellphone'];



                          		
                                $usertypenumber=2;
                                     $con=mysqli_connect("localhost","root","","eGiftShoppe") ;
                                          if(mysqli_connect_errno()){
                                              echo " ";
                                                 exit();
                                          }
                                          else{
                                             
                                                      $sqlstmt="INSERT INTO user(user_gender,user_fname,user_mname,user_lname,user_address1,user_zip,user_city,user_country,user_telephone,user_mobile_phone,user_email,user_name,user_password,user_display_name,user_category_type)
                                                                values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                                                       $stmt=$con->prepare ($sqlstmt);
                                                       $stmt->bind_param('sssssissiissssi',$gender,$fname,$mname,$lname,$address,$zip,$city,$country,$telephone,$cellphone,$email,$username,$password,$display_name,$usertypenumber);
                                                       $stmt->execute();
                                                       echo " SUCESSFULLY REGISTERED! you may now login <strong> <a href='loginpage.php'>here</a></strong>.";
                                                        header("refresh:10;url=index.php");
                                                    
                                                       
                                         }
                     }
                       


      }
 
                
?>



