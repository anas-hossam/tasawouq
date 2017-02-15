
<?php
session_start();
require_once '../config.php';
require_once '../functions.php';

$settings=new Settings();
$settings=$settings->getAll();
$setting=$settings[0];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?=$setting["title"]?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nuevo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
 <script src="js/scripts.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
<!--start-home-->
<div class="top_bg" id="home">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
                <ul>
                    <li><?php if(isset($_SESSION['loggedUser'])) echo '<a href="">'.$_SESSION['loggedUser']['fname'].'</a>'; else echo '<a href="account.php">'.$setting["main_link1"].'</a>'?></li>
                    <li><?php if(isset($_SESSION['loggedUser'])) echo '<a href="../users/logout.php">Logout</a>'; else echo '<a href="account.php">'.$setting["main_link2"].'</a>'?></li>
                    <li><a href="contact.php"><?=$setting["main_link3"]?></a></li>
                </ul>
			</div>
			<div class="top_left">
				<h6><span></span> Call us : <?=$setting["tel"]?></h6>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1><?=$setting["title"]?> <span>Shop</span></h1> </a>
		  </div>
		  <div class="header_right">
			<div class="cart box_1">
				<a href="checkout.php">
				 <div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>				 
		</div>
		<div class="clearfix"></div>	
	    </div>
			<!--start-header-menu-->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.php">Home</a></li>
			<li class="grid"><a class="color2" href="#">new arrivals</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">TUXEDO</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
								    <li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a class="color5" href="#">SWEATER</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">SHOES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color7" href="#">GLASSES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color8" href="#">T-SHIRT</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">WATCHES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
		 </ul> 
	</div>
</div>
</div>
 <!--start-content-->
<!--contact-->
   <div class="contact">
	  <div class="container">
			<h3 class="tittle con">Contact</h3>
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form>
					    	    <p class="comment-form-author"><label>Your Name:</label>
					    	    	<input type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label>Email:</label>
						     	   <input type="text" class="textbox" value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
						        <p class="comment-form-author"><label>Message:</label>
						    	  <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form>
				       </div>
			     </div>
			     <div class="contact_grid span_2_of_contact_right">
					<h3>Address</h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
                            <?=$setting["address"]?>
                        </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="phone"></i>
					    <div class="contact_address">
                            <?=$setting["tel"]?>
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
						  <a href="mailto:example@gmail.com"><?=$setting["email"]?></a>
					    </div>
					    <div class="clearfix"></div>
					</div>
		        </div>
		        <div class="clearfix"></div>
				<div class="map">
		    	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1413440825630"></iframe>
				</div>
	  </div>
  </div>
 <!--//checkout-->
      <!--start-bottom-->
		    <!--start-image-cursuals-->
                  <div class="scroll-slider">
                  	<div class="container"> 											 
							<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div> 
							<div class="clearfix"> </div>      
						  <!--start-image-->
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
								<!--//end-->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 5,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 2
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 3
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
						<!---->
				  </div>				
			</div>
 <!--//end-bottom-->
		<!--start-footer-->

	<ul class="socials">
        <li><a class="soc1" href="http://www.facebook.com/<?=$setting["fb"]?>"></a></li>
        <li><a class="soc2" href="http://www.twitter.com/<?=$setting["tw"]?>"></a></li>
        <li><a class="soc3" href="http://www.rss.com/<?=$setting["rss"]?>"></a></li>
				</ul>
	 <!--/start-copyright-->
	 <div class="copy">
		<div class="container">
			<p>&copy; <?=date("Y")?> <?=$setting["rights"]?> | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
	</div>
	 <!--//end-copyright-->
	<!--end-footer-->
 <!--//end-content-->
    	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>