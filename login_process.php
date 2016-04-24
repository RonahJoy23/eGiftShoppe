
      <?php
    session_start();
	 if(isset($_POST['submit'])){
         $username=$_POST['username'];
         $password=$_POST['password'];
        $connection=mysqli_connect("localhost","root","","eGiftShoppe") ;
            if(mysqli_connect_errno()){
                 exit(); 
            }
                else{

                    $query="SELECT user_id,user_fname,user_mname,user_lname,user_address1,user_zip,user_city,user_country,user_telephone,user_mobile_phone,user_email,user_display_name,user_category_type
                            FROM user 
                            WHERE user_name=? AND user_password=?";
                       
                         if($querystmt=mysqli_prepare($connection,$query)){ 
                                       mysqli_stmt_bind_param($querystmt,"ss",$username,$password);
                                       mysqli_stmt_execute($querystmt);
                                       mysqli_stmt_bind_result($querystmt,$user_id,$user_fname,$user_mname,$user_lname,$user_adress1,$user_zip,$user_city,$user_country,$user_telephone,$user_mobile_phone,$user_email,$user_display_name,$user_category_type);
                                               
                                             if(mysqli_stmt_fetch($querystmt)){
                                                    $_SESSION['user_id']=$user_id;
                                                    $_SESSION['user_fname']=$user_fname;
                                                    $_SESSION['user_mname']=$user_mname;
                                                    $_SESSION['user_lname']=$user_lname;
                                                    $_SESSION['user_adress1']=$user_adress1;
                                                    $_SESSION['user_city']=$user_city;
                                                    $_SESSION['user_country']=$user_country;
                                                    $_SESSION['user_telephone']=$user_telephone;
                                                    $_SESSION['user_mobile_phone']=$user_mobile_phone;
                                                    $_SESSION['user_email']=$user_email;
                                                    $_SESSION['user_display_name']=$user_display_name;
                                                    $_SESSION['user_category_type']=$user_category_type;
                                             
                                                    $_SESSION['logged']=1;

                                                            switch ($user_category_type) {
                                                             case "1":
                                                               header("refresh:1;url=admin_homepage.php");
                                                             break;
                                                             case "2":
                                                              header("refresh:1;url=user_homepage.php");
                                                             break;
                                                             }
                                                }
                                                  else {
                                                     echo " You inputted an invalid account.You will be redirected in 4 seconds ";  
                                                     header("refresh:4;url=index.php");
                                                  }
                                      } 
                           }                      
                      
                }



                                                    ?>
                                                   