<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';
$categories=new Categories();
$sub_categories=new Sub_categories();
$user=new User();
$sub_categories=$sub_categories->getAll();
?>
<div class="row" id="sub_categories">

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h1 class="box-title">Sub Categories</h1>
                <button class="btn btn-success pull-right" id="add_cat"><span class="fa fa-plus-circle"></span> New Sub_Category</button>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Sub_Category</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($sub_categories as $cat){?>
                        <tr>
                            <?php  ?>
                            <td><?=$cat['id']?></td>
                            <?php $categories=$categories->getById($cat['category_id'])?>
                            <td><?=$categories->name?></td>
                            <td><?=$cat['name']?></td>
                            <?php if($cat['is_valid']){?>
                                <td>Valid</td>
                            <?php }else{?>
                                <td>Invalid</td>
                            <?php }?>
                            <td><?=$cat['created_at']?></td>
                            <td><?=$cat['updated_at']?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=PATH?>sub_categories/edit.php/?id=<?=$cat['id']?>"><i class="pull-right glyphicon glyphicon-edit"></i>edit</a></li>
                                        <li><a  class="delOrder" href="" name="<?=$cat['id']?>"><i class="pull-right fa fa-trash"></i>delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php }?>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Sub_Category</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#sub_categories'));
        $('#example1').DataTable();
        $('.delOrder').on("click",function () {
//            alert('ok')
            $.ajax({
                url: "/sub_categories/delete.php/?id="+$(this).attr('name'),
                method: "GET",
                success: function (obj) {
                    console.log(obj);
                }
            });
        });
        $("#add_cat").on("click",function () {
            location.replace("/sub_categories/create.php");
        })

    });

</script>
