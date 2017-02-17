<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';

if(isset($_GET)){
    $id=$_GET['id'];
    $id=clearInputs($id);
    $category=new Sub_categories();
    $category=$category->getById($id);


}
?>
<div class="box box-primary" id="subCategoriesEdit">
    <div class="box-body">
        <div id="errors"></div>

        <!--        <form action="" method="">-->
        <div class="row">
            <!--
               	product_id 	name
                   -->

            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="form-group">
                    <label>Sub Category</label>
                    <input class="form-control" type="text"  id="cat_name" name="name" value="<?=$category->name?>">
                    <input type="hidden" id="cat_id" name="<?=$id?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4 col-lg-offset-10">
                <button type="submit" name="submit" id="updateSubCategories" class="btn btn-primary" onclick="return false;">UPDATE</button>
            </div>

        </div>


        <!--        <input type="submit" class="btn btn-success pull-left" value="Update">-->

        <!--        </form>-->

    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#subCategoriesEdit'));

        $("#updateSubCategories").on("click",function () {
//
//            alert("valid")
            $.ajax({
                url: "/sub_categories/update.php",
                method: "POST",
                data:{
                    id:$("#cat_id").attr('name'),
                    name:$("#cat_name").val()
                },
                success: function (obj) {
                    if(obj=="updated")
                        location.replace("/sub_categories");
                    console.log(obj);
                }
            });
        });

    });

</script>
