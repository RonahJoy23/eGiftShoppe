<?php
require ('createaccount-header.php')
?> 
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h3><center>Registration</center></h3>
                            </div>
                            <br>
                            <form method="post" action="register.php">
                            <div class="container">
                            	<div class="row">
                                	
                                    
                                    
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
                                    <div class="col-lg-8 col-md-8 col-sm-8">
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
                                <center>
                                  <button type="submit" class="orange" name="submit" >REGISTER </button> <a href="admin_homepage.php"> BACK </a> 
                                </center>
                                 </div>
                            </form>
                    	</div>
      </center>
                          
                    </div>

 <?php 
require ('footer.php');


 ?>                       