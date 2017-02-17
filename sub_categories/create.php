<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';
$cats=new Categories();
$cats=$cats->getAll();
?>
<div class="box box-primary" id="subCategoriesInsert">
    <div class="box-body">
        <div id="errors"></div>

        <!--        <form action="" method="">-->
        <div class="row">
            <!--
               	product_id 	name
                   -->

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Sub Category</label>
                    <input class="form-control" type="text"  id="cat_name" name="name" value="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
<!--                <div class="form-group">-->
                    <label>Category</label>
                    <select class="select" name="cats" id="cats">
                        <?php foreach ($cats as $cat){?>
                            <option class="list-style-item" value="<?=$cat['id']?>"><?=$cat['name']?></option>
                        <?php }?>
                    </select>
<!--                </div>-->
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4 col-lg-offset-8">
                <button type="submit" name="submit" id="insertSubCategory" class="btn btn-primary" onclick="return false;">ADD SUB_CATEGORY</button>
            </div>

        </div>


        <!--        <input type="submit" class="btn btn-success pull-left" value="Update">-->

        <!--        </form>-->

    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#subCategoriesInsert'));

        $("#insertSubCategory").on("click",function () {
//
//            alert("valid")
            $.ajax({
                url: "/sub_categories/insert.php",
                method: "POST",
                data:{
                    name:$("#cat_name").val(),
                    category_id:$("#cats").val()
                },
                success: function (obj) {
                    if(obj=="inserted") {
                        location.replace("/sub_categories");
//                        $("<span class='alert alert-success container-fluid'>Success Inserted</span>").appendTo($("#errors"));
                    }
                    console.log(obj);
//                    alert(obj)
                }
            });
        });

    });

</script>
