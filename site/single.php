<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();require_once '../config.php';
require_once '../functions.php';
require_once '../product.php';

@$id=$_GET['id'];
$product=product::getbyid($id);

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
<script src="js/bootstrap.js"> </script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
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
<!-- products -->
	<div class="products">
		<div class="container">
			<div class="products-grids">
				<div class="col-md-8 products-single">
				<div class="col-md-5 grid-single">		
						<div class="flexslider">
							  <ul class="slides">
								<li data-thumb="<?= $product['image']?>">
									<div class="thumb-image"> <img src="<?= $product['image']?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="<?= $product['image']?>">
									 <div class="thumb-image"> <img src="<?= $product['image']?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="<?= $product['image']?>">
								   <div class="thumb-image"> <img src="<?= $product['image']?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li> 
							  </ul>
						</div>
						<!-- FlexSlider -->
						<script src="js/imagezoom.js"></script>
						<script defer src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>

					</div>	
				<div class="col-md-7 single-text">
					<div class="details-left-info simpleCart_shelfItem">
						<h3>Accessories Latest</h3>
						<p class="availability">Availability: <span class="color"><?php if($product['in_stock']) echo 'In Stock'; else echo 'Unavailable';?></span></p>
						<div class="price_single">
							<span class="reducedfrom">$<?=$product['price']+200?></span>
                            <span class="actual item_price">$<?=$product['price']?></span><a href="#">click for offer</a>
						</div>
						<div class="quantity_box">
						    <span>Quantity:</span>
							<div class="product-qty">
								<select name="qty" id="qty">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
							</div>
						</div>
					<div class="clearfix"> </div>
				<div class="single-but item_add">
					<input type="submit" id="addToCart" name="<?=$product['id']?>" onclick="return false;" value="add to cart"/>
                    <script>
                        $(function () {
                            $("#addToCart").on("click",function () {
                                $.ajax({
                                    url:"addToCart.php",
                                    method:"POST",
                                    data:{
                                        product_id:$("#addToCart").attr('name'),
                                        quantity:$("#qty").val()
                                    },
                                    success:function (obj) {
                                        console.log(obj)
                                    }
                                })
                            })
                        })
                    </script>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-4 products-grid-right">
        <div class="w_sidebar">

            <section  class="sky-form">
                <h4>catogories</h4>
                <div class="row1 scroll-pane">
                    <div class="col col-4">
                        <?php
                        foreach ($catObj->getAll() as $key => $value) {
                            echo '<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>'.$value['name'].'</label>';
                        }
                        ?>
                    </div>
                </div>
            </section>
            <section  class="sky-form">
                <h4>brand</h4>
                <div class="row1 scroll-pane">
                    <div class="col col-4">
                        <?php
                        foreach ($subCatObj->getAll() as $key => $value) {
                            echo '<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>' . $value['name'] . '</label>';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
				</div>
				<div class="clearfix"></div>
				<!-- collapse -->
    <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Description
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?=$product['description']?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           additional information
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          <?=$product['info']?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          reviews
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
          <?=$product['reviews']?>      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          help
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
          <?=$product['help']?>
      </div>
    </div>
  </div>
</div>
<!-- collapse -->
 <!--/start-latest-->
		<div class="collection-section">
		     <h3 class="tittle">Related Products</h3>

		   <div class="fashion-info">

               <?php $similarProducts=product::getCatsById($id);
                        foreach ($similarProducts as $product) {
                            ?>

                            <div class="col-md-4 fashion-grids">
                                <figure class="effect-bubba">
                                    <img src="<?=$product['image']?>" alt=""/>
                                    <figcaption>
                                        <h4><?=$setting['title']?> Shop</h4>
                                        <p class="cart"><a href="single.php?id=<?=$product['id']?>">Shop</a></p>
                                    </figcaption>
                                </figure>
                            </div>
                            <?php
                        }
               ?>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
       <!--//latest-->
			</div>
	</div>
<!-- //products -->
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