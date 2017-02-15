
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
<meta name="keywords" content="Tasawouq Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>
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
<!-- header_top -->
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
			  <a href="index.php"><h1><?=$setting["title"]?> <span>Shop</span></h1></a>
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
<!--account-->
   <div class="account">
	  <div class="container">
	       <div class="account-bottom">
				<div class="col-md-6 account-left">
                    <div class="alert alert-danger container-fluid" id="registerMessage" style="display: none;"></div>
					<form id="myRegisterForm">
					<div class="account-top heading">
						<h3>NEW CUSTOMERS</h3>
					</div>
					<div class="address">
						<span>First Name</span>
						<input type="text" id="fnameid" name="fname"/>
					</div>
					<div class="address">
						<span>Last Name</span>
						<input type="text" id="lnameid" name="lname"/>
					</div>
					<div class="address">
						<span>Email Address</span>
						<input type="text" id="email" name="email"/>
					</div>
					<div class="address">
						<span>Password</span>
						<input type="password" id="password" name="password"/>
					</div>
					<div class="address">
						<span>Re-enter Password</span>
						<input type="password" id="repassword" name="repassword"/>
					</div>
						<div class="address">
							<span>Birthday</span>
							<input type="text" id="birthday" name="birthday"/>
						</div>
						<div class="address">
							<span>Job</span>
							<input type="text" id="job" name="job"/>
						</div>
						<div class="address">
							<span>Credit Limit</span>
							<input type="text" id="credit_limit" name="credit_limit"/>
						</div>
						<div class="address">
							<span>Address</span>
							<input type="text" id="address" name="address"/>
						</div>
					<div class="address new">
						<input type="submit" id="register" value="submit" onclick="return false;">
					</div>
					</form>
                    <script>
                        $.validator.setDefaults({
                            submitHandler: function() {
                                alert("submitted!");
                            }
                        });
                        $(function () {
                            $("#myRegisterForm").validate({
                                rules:{
                                    fname: {
                                        required: true,
                                        minWords:3
                                    },
                                    lname: {
                                        required: true,
                                        minWords:3
                                    },
                                    password: {
                                        required: true,
                                        minlength: 8
                                    },
                                    repassword: {
                                        required: true,
                                        minlength: 8,
                                        equalTo: "#password"
                                    },
                                    email:{
                                        required: true,
                                        email: true
                                    }
                                },
                                messages: {
                                    fname: {
                                        required:"<span style='color: red;'>Please enter your firstname</span>",
                                        minWords:"<span style='color: red;'>Please enter at least 3 charachters</span>"
                                    },
                                    lname: {
                                        required:"<span style='color: red;'>Please enter your lastname</span>",
                                        minWords:"<span style='color: red;'>Please enter at least 3 charachters</span>"

                                    },
                                    password: {
                                        required: "<span style='color: red;'>Please provide a password</span>",
                                        minlength: "<span style='color: red;'>Your password must be at least 8 characters long</span>"
                                    },
                                    repassword: {
                                        required: "<span style='color: red;'>Please provide a password</span>",
                                        minlength: "<span style='color: red;'>Your password must be at least 8 characters long</span>",
                                        equalTo: "<span style='color: red;'>Please enter the same password as above</span>"
                                    },
                                    email: "<span style='color: red;'>Please enter a valid email address</span>"
                                }

                            });
                            $("#register").on("click",function (e) {
//

                               $.ajax({
                                   url:"../users/register.php",
                                   method:"POST",
                                   data:$('#myRegisterForm').serialize(),
                                success:function (data) {
                                       if(data=="failed"){
                                           $("#registerMessage").text("Registeration Information Invalid !");
                                           $("#registerMessage").fadeIn(2000);
                                       }else if(data=="inserted"){
                                           location.replace("/site/index.php");
                                       }
                                    console.log(data);
                                   }
                               }) ;
                            });
                        });
                    </script>
				</div> 
				<div class="col-md-6 account-left second">
                    <div class="alert alert-danger container-fluid" id="logMessage" style="display: none;"></div>
                    <div class="clearfix"></div>
<!--                    --><?php //if(isset($_SESSION['loggedUser'])){ ?>
<!--                    <script> </script>-->
<!--                    --><?php //}?>
					<form id="myLoginForm">
						<div class="account-top heading">
							<h3>REGISTERED CUSTOMERS</h3>
						</div>
						<div class="address">
							<span>Email Address</span>
                            <input type="text" name="email" id="emailLog">


                        </div>
						<div class="address">
							<span>Password</span>
							<input type="password" name="password" id="password">
						</div>
						<div class="address">
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" id="login" value="Login" onclick="return false;">
						</div>
					 </form>
                    <script>
                        $.validator.setDefaults({
                            submitHandler: function() {
                                alert("submitted!");
                            }
                        });

                        $(function () {
                            $("#myLoginForm").validate({
                                rules:{
                                    email:{
                                        required: true,
                                        email: true
                                    },
                                    password:{
                                        minlength: 8,
                                        required: true
                                    }
                                },
                                messages: {
                                    password: {
                                        required: "<span style='color: red;'>Please provide a password</span>",
                                        minlength: "<span style='color: red;'>Your password must be at least 8 characters long</span>"
                                    },
                                    email: "<span style='color: red;'>Please enter a valid email address</span>"
                                }

                            });

                            $("#login").on("click",function (e) {


//                                alert("login")
//                                $(this).preventDefault();
                                $.ajax({
                                    url:"../users/loginUser.php",
                                    method:"POST",
                                    data:$('#myLoginForm').serialize(),
                                    success:function (data) {
                                        if(data!="failed")
                                        location.replace("/site/index.php");
                                        else {
                                            $("#logMessage").text("Username Or Password Incorrect");
                                            $("#logMessage").show(3000).fadeOut();
                                        }
                                        console.log(data);
                                    }
                                }) ;
                            });
                        });
                    </script>
					  </div>
				 </div>
				<div class="clearfix"></div>
			</div>
	  </div>
<!-- checkout -->
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