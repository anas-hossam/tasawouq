
<?php
require '../config.php';
//require_once '../classes/product.php';
require_once '../functions.php';
require_once '../admin.php';
$cats=new Categories();
$cats=$cats->getAll();

?>

<div class="box box-primary" >
    <div class="box-body">
        <div id="errors"></div>
<div class="row">
    <form class="form-group" id="addproduct" enctype="multipart/form-data" method="post" action="/products/addprocess.php">
<!--    <div class="col-xs-12 col-sm-6 col-lg-4">-->
<!--        <div class="form-group">-->
<!--            <label>ID</label>-->
<!--            <input class="form-control" type="text"  name="id"  id="id">-->
<!--        </div>-->
<!--    </div>-->
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <label for="cats"> Category</label>
        <select class="select" name="cats" id="cats">
            <?php foreach ($cats as $cat){?>
                <option class="list-style-item" value="<?=$cat['id']?>"><?=$cat['name']?></option>
            <?php }?>
        </select>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" type="text"  name="price"  id="price">
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Quantity</label>
            <input class="form-control" type="text"  name="quantity" id="qty">
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-lg-4">

            <label>image</label>
            <input class=" btn-file" type="file"  name="image" id="image">

    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text"  name="name"  id="name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Description</label>
            <input class="form-control" type="text"  name="description" id="desc">
        </div>
    </div>
<!--    <div class="col-xs-12 col-sm-6 col-lg-4">-->
<!--        <div class="form-group">-->
<!--            <label>In_stock</label>-->
<!--            <input class="form-control" type="text" name="in_stock" id="in_stock">-->
<!--        </div>-->
<!--    </div>-->
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Info</label>
            <input class="form-control" type="text"  name="info" id="info">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Review</label>
            <input class="form-control" type="text" name="reviews" id="rev">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="form-group">
            <label>Help</label>
            <input class="form-control" type="text"  name="help" id="help" >
        </div>
    </div>
<!--    <div class="col-xs-12 col-sm-6 col-lg-4">-->
<!--        <div class="form-group">-->
<!--            <label>Is_valid</label>-->
<!--            <input class="form-control" type="text"  name="is_valid" id="is_valid">-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="col-xs-12 col-sm-6 col-lg-4">-->
<!--        <div class="form-group">-->
<!--            <label>Created_at</label>-->
<!--            <input class="form-control" type="text"  name="created_at" id="created">-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="col-xs-12 col-sm-6 col-lg-4">-->
<!--        <div class="form-group">-->
<!--            <label>Updated_at</label>-->
<!--            <input class="form-control" type="text"  name="updated_at" id="update">-->
<!--        </div>-->
<!--    </div>-->
        <div class="col-xs-12 col-sm-6 col-lg-4 col-lg-offset-11 pull-right">
            <input  type="submit" id="insertproduct"  class="btn btn-primary btn-lg " value="Insert" />
        </div>
    </form>
</div>

</div>
</div>

<script>
    $(function () {

        $('.content').append($('#addproduct'));
    //     $("#insert").on("click",function () {
    //         $.ajax({
    //             url: "/products/addprocess.php",
    //             method: "POST",
    //             data:
    //             {
    //               id:$("#id").val(),
    //               price:$("#price").val(),
    //               quantity:$("#qty").val(),
    //               image:$("#image").val(),
    //               name:$("#name").val(),
    //               description:$("#desc").val(),
    //               in_stock:$("#in_stock").val(),
    //               info:$("#info").val(),
    //               reviews:$("#rev").val(),
    //               help:$("#help").val(),
    //               is_valid:$("#is_valid").val(),
    //               created_at:$("#created").val(),
    //               updated_at:$("#update").val()
    //             },
    //             success: function (response) {
    //                 alert(response);
    //               //   if(response=="true")
    //               //   {
    //               //     $("#insert").addClass("btn-success");
    //               //   }
    //               //   else {
    //               //     $("#insert").addClass("btn-danger");
    //               //   }
    //               }
    //         });
    //
    //
    // });
});
</script>
