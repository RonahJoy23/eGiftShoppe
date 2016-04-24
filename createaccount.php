
<?php
require ('header.php')
?>
	
          	
<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="index.php">Home</a> <i class="icons icon-right-dir"></i> Create an account</p>
                    </div>
                </div>    <hr size="5">        
                               <br><br>
                                <center>
                                <h1>Account Details
                            	<p>Already Registered? Please Login Here</p>
                                </h1>
                                </center>
                                <br>
                                
                                <form method="post" action="login_process.php">
                                	<div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="iconic-input">
                                            <input type="text" name="username" placeholder="Username">
                                            <i class="icons icon-user-3"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                    	<div class="iconic-input">
                                            <input type="password" name="password" placeholder="Password">
                                            <i class="icons icon-lock"></i>
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <center>
                                 <button type="submit" class="orange" name="submit" >Login </button>
                                    </center>
                                </form>  
                                
                            <br><br><br><br><br>
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading margin=5">
                                <h3><center>Registration</center></h3>
                            </div>
                            <form method="post" action="register.php">
                            <div class="container">
                            	<div class="row">
                                	
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<h4>Customer Information</h4>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>E-Mail*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="email" required name="email">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Username*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" required name="username">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Displayed Name*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" required name="display_name">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" required name="password">
                                    </div>	
                                    
                                </div>
                                
                               
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>I agree to the terms of Service</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="checkbox" id="i-agree-to-terms"><label for="i-agree-to-terms"></label>
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<p><strong>Other Information</strong></p>
                                    </div>
                                   
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Title</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<select class="chosen-select" required name="gender">
                                        	<option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Ms.</option>
                                        </select>
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>First Name</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" required name="fname">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Middle Name</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="mname">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Last Name</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text"  required name="lname">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Address</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" required name="address">
                                    </div>	
                                    
                                </div>
                                
                              
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>ZIP / Postal Code</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="number" required name="zip" min="1" max="9999999">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>City</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" required name="city">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Country</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" required name="country">
                                    </div>	
                                    
                                </div>
                                
                             
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Telephone</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="number" min="1" max="999999999999999999" required name="telephone">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Mobile Phone</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="number" min="1" max="999999999999999999" required name="cellphone">
                                    </div>	
                                    
                                </div>
                                
                                 <center> <button type="submit" class="orange" name="submit" >REGISTER </button> </center>
                                 </form>
                            </div>
                        </div>
 		