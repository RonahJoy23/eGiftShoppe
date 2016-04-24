<?php


session_start();
?>

<?php 
 if( $_SESSION['logged']==0 ||$_SESSION['user_category_type']!=1)
  {
    
      header('refresh: 0; url=index.php');
  }

?>
<!DOCTYPE html>

<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Title -->
        <title>eGiftShoppe</title>
        
		<!-- Custom Fonts -->
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/perfect-scrollbar.css">
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
   		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/chosen.css">
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/agency.css">
        <link rel="stylesheet" href="css/style.css">
        
<script src="js/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
  <script src="js/simpleCart.min.js"> </script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

			<link rel="stylesheet" href="css/ie.css">
<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
    <![endif]-->
        

    
    </head>
    
    
		<body id="page-top" class="index">
		
			
			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header">
						
						<div class="row">
							
							<nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
								<ul class="pull-left">
									<li><a href="admin_addproducts.php"><h5>Add Products</h5></a></li>
                                    <li><a href="admin_createadminaccount.php"><h5>Add Admin</h5></a></li>
                                    <li><a href="admin_createuseraccount.php"><h5>Add User</h5></a></li>
                                    <li><a href="admin_userlist.php"><h5>User List</h5></a></li>
                                </ul>
							</nav>
							
							<nav class="col-lg-5 col-md-5 col-sm-5">
								<ul class="pull-right">
									<li class="yellow"><h5><i class="icons icon-user-3"></i><?php echo "Welcome! {$_SESSION['user_fname']}  {$_SESSION['user_lname']} "; ?></h5></a>
										
									</li>
									
								</ul>
								<ul class="pull-right">
                                    <li class="yellow"><a href="logout.php"><h5><i class="icons icon-logout-3"></i> Logout</h5></a>
										
									</li>
									
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					
					
				</div>
				
			</header>
			<!-- /Header -->
    
			