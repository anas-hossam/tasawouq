<?php
require_once '../admin.php';
?>
<div class="box box-primary" id="categoriesInsert">
    <div class="box-body">
        <div id="errors"></div>

        <!--        <form action="" method="">-->
        <div class="row">
            <!--
               	product_id 	name
                   -->

            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="form-group">
                    <label>Category_Name</label>
                    <input class="form-control" type="text"  id="cat_name" name="name" value="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4 col-lg-offset-10">
                <button type="submit" name="submit" id="insertCategory" class="btn btn-primary" onclick="return false;">ADD CATEGORY</button>
            </div>

        </div>


        <!--        <input type="submit" class="btn btn-success pull-left" value="Update">-->

        <!--        </form>-->

    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#categoriesInsert'));

        $("#insertCategory").on("click",function () {
//
//            alert("valid")
            $.ajax({
                url: "/categories/insert.php",
                method: "POST",
                data:{
                    name:$("#cat_name").val()
                },
                success: function (obj) {
                    if(obj=="inserted") {
                        location.replace("/categories");
//                        $("<span class='alert alert-success container-fluid'>Success Inserted</span>").appendTo($("#errors"));
                    }
                    console.log(obj);
//                    alert(obj)
                }
            });
        });

    });

</script>
