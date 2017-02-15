<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';

$order=new Shopping_List();
$user=new User();
$order=$order->getAll();
?>
<div class="row" id="orders">

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h1 class="box-title">Orders</h1>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Product_id</th>
                        <th>Quantity</th>
                        <th>Total_Price</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($order as $or){?>
                        <tr>
                            <?php $user=$user->getById($or['product_id']) ?>
                            <td><?=$user->fname?></td>
                            <td><?=$or['product_id']?></td>
                            <td><?=$or['quantity']?></td>
                            <td><?=$or['total_price']?></td>
                            <?php if($or['is_valid']){?>
                            <td>Valid</td>
                            <?php }else{?>
                            <td>Invalid</td>
                            <?php }?>
                            <td><?=$or['created_at']?></td>
                            <td><?=$or['updated_at']?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=PATH?>orders/view.php/?id=<?=$or['id']?>"><i class="pull-right glyphicon glyphicon-eye-open"></i>view</a></li>

                                        <li><a href="<?=PATH?>orders/edit.php/?id=<?=$or['id']?>"><i class="pull-right glyphicon glyphicon-edit"></i>edit</a></li>
                                        <!--                                    <hr>-->
                                        <li><a  id="delOrder" href="" name="<?=$or['id']?>"><i class="pull-right glyphicon glyphicon-remove"></i>delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php }?>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>User</th>
                        <th>Product_id</th>
                        <th>Quantity</th>
                        <th>Total_Price</th>
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
        $('.content').append($('#orders'));
        $('#example1').DataTable();
        $('#delOrder').on("click",function () {
//            alert('ok')
            $.ajax({
                url: "/orders/delete.php/?id="+$("#delOrder").attr('name'),
                method: "GET",
                success: function (obj) {
                    console.log(obj);
                }
            });
        });
    });

</script>
