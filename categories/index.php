<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';

$categories=new Categories();
$user=new User();
$categories=$categories->getAll();
?>
<div class="row" id="categories">

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h1 class="box-title">Categories</h1>
                <button class="btn btn-success pull-right" id="add_cat"><span class="fa fa-plus-circle"></span> New Category</button>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                       <th>ID</th>
                        <th>Category_Name</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($categories as $cat){?>
                        <tr>
                            <?php  ?>
                            <td><?=$cat['id']?></td>
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
                                        <li><a href="<?=PATH?>categories/edit.php/?id=<?=$cat['id']?>"><i class="pull-right glyphicon glyphicon-edit"></i>edit</a></li>
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
                        <th>Category_Name</th>
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
        $('.content').append($('#categories'));
        $('#example1').DataTable();
        $('.delOrder').on("click",function () {
//            alert('ok')
            $.ajax({
                url: "/categories/delete.php/?id="+$(this).attr('name'),
                method: "GET",
                success: function (obj) {
                    console.log(obj);
                }
            });
        });
        $("#add_cat").on("click",function () {
            location.replace("/categories/create.php");
        })

    });

</script>
