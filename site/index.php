
<?php
session_start();
require_once '../config.php';
require_once '../functions.php';
require_once '../product.php';

$catObj = new Categories();
$subCatObj = new Sub_categories();

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
                    <li><?php if(isset($_SESSION['loggedUser'])) echo '<a href="">'.$_SESSION['loggedUser']['fname'].'</a>'; else echo '<a href="account.php">Login</a>'?></li>
                    <li><?php if(isset($_SESSION['loggedUser'])) echo '<a href="../users/logout.php">Logout</a>'; else echo '<a href="account.php">Sign Up</a>'?></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
			</div>
			<div class="top_left">
				<h6><span></span> Call us : <?=$setting["tel"]?></h6>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-->
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
					<i class="glyphicon glyphicon-shopping-cart"></i></a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>				 
		</div>
		<div class="clearfix"></div>	
	    </div>
		<!--start-header-menu-->
        <ul class="megamenu skyblue">
            <li class="active grid"><a class="color1" href="index.php">Home</a></li>
            <?php

            foreach ($catObj->getAll() as $key => $val) {
                $id_val = $val['id'];
                if($key<7) {
                    ?>
                    <li class="grid"><a class="color2" href="#"><?= $val['name'] ?></a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4><?= $val['name'] ?></h4>
                                        <ul>

                                            <?php
                                            $counter = 0;
                                            foreach ($subCatObj->getSubcategoryByCategoryId($id_val) as $key => $value) {
                                            if ($counter > 5) {
                                            ?>
                                        </ul></div></div>
                                <div class="col1"><div class="h_nav"><h4><?=$val['name']?></h4><ul>
                                            <?php
                                            $counter = 0;
                                            } ?>
                                            <li><a href="product.php?cat_id=<?=$val['id']?>&subCat_id=<?=$value['id']?>"><?=$value['name']?></a></li>
                                            <?php
                                            $counter++;
                                            } ?>

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
                    <?php
                }
            }?>
        </ul>
	</div>
</div>
</div>
 <!--start-content-->
		 <!--start-banner-->
		    <div class="banner">
			    <div class="container">
                    <?php $products=product::homeProducts('Home Collection');?>
				   <div class="banner-grids">
				       <div class="col-md-6 jocket">
						   <div class="jock-img">
						     <img src="<?=$products[1]['image']?>" alt="">
						   </div>
						    <div class="jock-text">
						      <h3 class="b-tittle"><?=$products[1]['name']?></h3>
							 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
						   </div>
						   <div class="clearfix"> </div>
					   </div>
					   <div class="col-md-6 shoe">
							   <div class="shoe-img">
								 <img src="<?=$products[3]['image']?>" class="img-responsive" alt="">
							   </div>
								<div class="shoe-text">
								   <h3 class="b-tittle"><?=$products[3]['name']?></h3>
								 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
							   </div>
							   <div class="clearfix"> </div>
						<div class="bottom-bags">
							   <div class="col-md-6 pack">
								  <div class="bag-text">
									   <h3 class="b-tittle"><?=$products[0]['name']?></h3>
									 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
								   </div>
								   <div class="bag-img">
									 <img src="<?=$products[0]['image']?>" class="img-responsive" alt="">
								   </div>
								   <div class="clearfix"> </div>
								   
							   </div>	
							   <div class="col-md-6 glass">
								  <div class="glass-text">
									   <h3 class="b-tittle"><?=$products[2]['name']?></h3>
								 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
								   </div>
								   <div class="glass-img">
									 <img src="<?=$products[2]['image']?>" class="img-responsive" alt="">
								   </div>
								   <div class="clearfix"> </div>
								   
							   </div>	
								<div class="clearfix"> </div>						   
							</div>
					    </div>						   
						   <div class="clearfix"> </div>
				   </div>
				</div>
			</div>
         <!--/start-fashion-->
        <?php $product_sec1=product::homeProducts("Fashions");?>
		<div class="fashion-section">
		 <div class="container"> 
		     <h3 class="tittle"><?=$setting["home_txt1"]?></h3>

		   <div class="fashion-info">
               <?php foreach ($product_sec1 as $pro){?>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="<?=$pro['image']?>" alt=""/>
						<figcaption>
							<h4><?=$setting["title"]?> Shop</h4>
							<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>
					</figure>
				</div>
               <?php }?>


				<div class="clearfix"></div>
			</div>
		</div>
	</div>
       <!--//fashion-->
	    <!--/start-latest-->
<?php $product_sec2=product::homeProducts("Featured Collection");?>
		<div class="collection-section">
		 <div class="container"> 
		     <h3 class="tittle fea"><?=$setting["home_txt2"]?></h3>

		   <div class="fashion-info">
               <?php foreach ($product_sec2 as $pro2){?>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="<?=$pro2['image']?>" alt=""/>
						<figcaption>
							<h4><?=$setting["title"]?> Shop</h4>
							<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>
					</figure>
				</div>
               <?php }?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

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