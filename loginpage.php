
<?php
require ('header.php')
?>
	
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="index.php">Home</a> <i class="icons icon-right-dir"></i> Create an account</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>User Details</h4>
                            </div>
                            
                            <div class="page-content">
                            	<p>Already registered? Please Login Here</p>
                                <div class="row">
                                <form method="post" action="login_process.php">
                                	<div class="col-lg-8 col-md-8 col-sm-8">
                                    	<div class="iconic-input">
                                            <input type="text" name="username" placeholder="Username">
                                            <i class="icons icon-user-3"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<div class="iconic-input">
                                            <input type="password" name="password" placeholder="Password">
                                            <i class="icons icon-lock"></i>
                                        </div>
                                    </div>
                                </div>
                                 <button type="submit" class="orange" name="submit" >Login </button>
                                </form>
                                
                                
                                <br/><br/>
                                <div class="row">
                                	
                                  
                                </div>
                            </div>
                            
                    	</div>
                          
                    </div>
                    
                    
                    
                   
                    
				</section>
				<!-- /Main Content -->
                
                
                
			</div>
			<!-- /Content -->
			
			
			


			

<?php 
require ('footer.php');


 ?>