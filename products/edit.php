<?php
require '../config.php';
//require_once '../classes/product.php';
require_once '../functions.php';
require_once '../admin.php';

if(isset($_GET)){
    $id=$_GET['id'];
$product=product::getbyid($id);
$cats=new Categories();
$cats=$cats->getAll();
}
?>
<script>
    $(function () {
        $('.content').append($('#productsEdit'));
//        $("#updateproduct").on("click",function () {
//            $.ajax({
//                url: "../update.php",
//                method: "POST",
//                data:$("#myformProduct").serialize() ,
//                success: function (response) {
//                    if(response=="true")
//                    {
//                      $("#updateproduct").addClass("btn-success");
//                    }
//                    else {
//                      $("#updateproduct").addClass("btn-danger");
//                    }
//                 }
//            });
//        });

    });

</script>

<div class="box box-primary" id="productsEdit">
    <div class="box-body">
        <div id="errors"></div>
<div class="row">
    <form class="form-group" action="/products/update.php" id="myformProduct" method="post" enctype="multipart/form-data">
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>ID</label>
            <input class="form-control" type="text"  name="id" id="id" value="<?=$product['id']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
<!--      <div class="dropdown">-->
<!--          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">category_id-->
<!--              <span class="caret"></span></button>-->
<!--          <ul class="dropdown-menu">-->
<!--            <!-- array of category  -->
<!---->
<!--              <li id="catlist">--><?//=$product['category_id']?><!--</li>-->
<!---->
<!--          </ul>-->
<!--      </div>-->
        <select class="select" name="cats" id="cats">
            <?php foreach ($cats as $cat){?>
            <option class="list-style-item" value="<?=$cat['id']?>"><?=$cat['name']?></option>
            <?php }?>
        </select>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" type="text"  name="price" id="price"  value="<?=$product['price']?>">
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Quantity</label>
            <input class="form-control" type="text" name="quantity"  id="qty" value="<?=$product['quantity']?>">
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>image</label>
            <input class="form-control" type="file"  name="image" id="img" value="<?=$product['image']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text"  name="name" id="name" value="<?=$product['name']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Description</label>
            <input class="form-control" type="text"  name="description"  id="desc" value="<?=$product['description']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>In_stock</label>
            <input class="form-control" type="text" name="in_stock" id="in_stock" value="<?=$product['in_stock']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Info</label>
            <input class="form-control" type="text"  name="info"  id="info" value="<?=$product['info']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Review</label>
            <input class="form-control" type="text" name="reviews"  id="rev" value="<?=$product['reviews']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Help</label>
            <input class="form-control" type="text"  name="help"  id="help" value="<?=$product['help']?>">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Is_valid</label>
            <input class="form-control" type="text"  name="is_valid" id="valid" value="<?=$product['is_valid']?>">
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Created_at</label>
            <input class="form-control" type="text"  name="created_at"  id="created" value="<?=$product['created_at']?>">
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Updated_at</label>
            <input class="form-control" type="text"  name="updated_at"  id="update" value="<?=$product['updated_at']?>">
        </div>
    </div>
        <div class="clearfix"></div>
        <br><br>
        <div class="col-xs-12 col-sm-6 col-lg-4 pull-right">
            <input  type="submit" id="updateproduct"  class="btn btn-default pull-left" value="Update" />
        </div>
    </form>
</div>


<!--        id:$("#id").val(),-->
<!--        price:$("#price").val(),-->
<!--        category_id:$(".catlist").val(), // not sure about it check it-->
<!--        quantity:$("#qty").val(),-->
<!--        image:$("#img").val(),-->
<!--        name:$("#name").val(),-->
<!--        description:$("#desc").val(),-->
<!--        in_stock:$("#in_stock").val(),-->
<!--        info:$("#info").val(),-->
<!--        reviews:$("#rev").val(),-->
<!--        help:$("#help").val(),-->
<!--        is_valid:$("#valid").val(),-->
<!--        created_at:$("#created").val(),-->
<!--        updated_at:$("#update").val()-->

</div>

</div>



