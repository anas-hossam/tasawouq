<?php
require '../config.php';
//require_once '../classes/product.php';
require_once '../functions.php';
require_once '../admin.php';

$id=$_GET['id'];
$product=product::getbyid($id);
?>
<div class="box box-primary" id="productsview">
    <div class="box-body">
        <div id="errors"></div>

<!--        <form action="" method="">-->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" type="text" disabled name="id" value="<?=$product['id']?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" type="text" disabled name="price" value="<?=$product['price']?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Quantity</label>
                    <input class="form-control" type="text" disabled name="quantity" value="<?=$product['quantity']?>">
                </div>
            </div>

<!--            <div class="col-xs-12 col-sm-6 col-lg-4">-->
<!--                <div class="form-group">-->
<!--                    <label>image</label>-->
<!--                    <input class="form-control" type="text" disabled name="image" value="--><?//=$product['image']?><!--">-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>name</label>
                    <input class="form-control" type="text" disabled name="name" value="<?=$product['name']?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>description</label>
                    <input class="form-control" type="text" disabled name="description" value="<?=$product['description']?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>in_stock</label>
                    <input class="form-control" type="text" disabled name="in_stock" value="<?=$product['in_stock']?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>info</label>
                    <input class="form-control" type="text" disabled name="info" value="<?=$product['info']?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>review</label>
                    <input class="form-control" type="text" disabled name="reviews" value="<?=$product['reviews']?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>help</label>
                    <input class="form-control" type="text" disabled name="help" value="<?=$product['help']?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>is_valid</label>
                    <input class="form-control" type="text" disabled name="is_valid" value="<?=$product['is_valid']?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>created_at</label>
                    <input class="form-control" type="text" disabled name="created_at" value="<?=$product['created_at']?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>updated_at</label>
                    <input class="form-control" type="text" disabled name="updated_at" value="<?=$product['updated_at']?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Status</label>
                    <?php if($product['is_valid']){
                    ?><input class="form-control" type="text" disabled name="is_valid" value="Valid">
                   <?php } else {?>
                    <input class="form-control" type="text" disabled name="is_valid" value="InValid">
                    <?php }?>
                </div>
            </div>
            <img class="img-responsive col-xs-12 col-sm-6 col-lg-4 pull-right" src="<?=$product['image']?>" width="300" height="200" alt="no image"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4 pull-left">
            <div class="form-group">
                <input type="submit" style="margin-buttom: 200px;"  id="updatefromview" name="<?=$product['id']?>"class="btn btn-lg btn-primary pull-left" value="Update">

            </div>
        </div>

<!--        -->

<!--        </form>-->

    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#productsview'));
        var x=$('#updatefromview').attr('name');
        $("#updatefromview").on("click",function () {
             window.location.href =" ../edit.php/?id="+x;

        });

    });

</script>
