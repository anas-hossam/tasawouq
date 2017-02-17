<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();
require_once '../config.php';
require_once '../functions.php';
require_once '../product.php';

$catObj = new Categories();
$subCatObj = new Sub_categories();

if(isset($_SESSION['loggedUser'])) {
    $user_id=$_SESSION['loggedUser']['id'];
    $lists = new Shopping_List();
    $lists=$lists->getByUserId($user_id);
}

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
			  <a href="index.php"><h1><?=$setting["title"]?> <span>Shop</span></h1> </a>
		  </div>
		  <div class="header_right">
			<div class="cart box_1">
				<a href="checkout.php">
				<div class="total">
					<span class="simpleCart_total">0</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)</div>
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty"><?php if(isset($_SESSION['loggedUser'])){if(count($lists)==0)echo 'Empty Cart';}?></a></p>
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
<!-- checkout -->
<div class="cart-items">
	<div class="container">
			 <h3 class="tittle numOfShopping">My shopping(<?=@count($lists)?>)</h3>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
                        $.ajax({
                            url: "/orders/delete.php/?id="+$(this).parent().attr('name'),
                            method: "GET",
                            success: function (obj) {
                                console.log(obj);
                                $(".numOfShopping").text("My shopping("+obj+")");
                            }
                        });
						$(this).parent().fadeOut('slow', function(c){

							$(this).remove();

						});
						});	  
					});
			   </script>
        <?php
//        var_dump($lists);
        if(isset($_SESSION['loggedUser'])) {
            ?>
            <script>
                $(function () {
                    $(".cart-items #errorF").fadeOut();
                })
            </script>
            <?php
            foreach ($lists as $order) {

                $product_cart = product::getbyid($order['product_id']);
                ?>
                <div class="cart-header" name="<?=$order['id']?>">
<!--                    <input type="hidden" id="orderId" name="--><?//=$order['id']?><!--">-->
                    <div class="close1" ></div>
                    <div class="cart-sec simpleCart_shelfItem">
                        <div class="cart-item cyc">
                            <img src="<?= $product_cart['image'] ?>" class="img-responsive" alt="">
                        </div>
                        <div class="cart-item-info">
                            <h3><a id="delOrder" name="" href="#"> <?= $product_cart['name'] ?> </a><span>Pickup time:</span></h3>
                            <ul class="qty">
                                <li><p>Min. order value:</p></li>
                                <li><p>FREE delivery</p></li>
                            </ul>
                            <div class="delivery">
                                <p>Service Charges : $10.00</p>
                                <span>Delivered in 1-1:30 hours</span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
                <?php
            }
        }
        else{
            ?>
            <script>
              $(function () {
                  $(".cart-items").append("<div id='errorF' class='alert alert-danger container-fluid'>Please, log in to add in carts</div>")
              })
            </script>
            <?php
        }
            ?>
        <div class="form-group">
            <?php if(isset($_SESSION['loggedUser'])){
                if(count($lists)!=0) { ?>
                <input class="btn btn-lg  btn-primary" type="submit" id="buy" style="margin-left: 45%;"  onclick="return false;" value="Buy Now"/>
                <?php
            }
            }
           ?>
            <script>
                $(function () {
                    $("#buy").on("click",function () {
                        $.ajax({
                            url: "/orders/buy.php",
                            method: "POST",
                            success: function (obj) {
                                console.log(obj);
                            }
                        });
                    })
                })
            </script>
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