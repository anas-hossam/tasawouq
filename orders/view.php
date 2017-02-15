<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';

$order=new Shopping_List();
$user=new User();
$id=$_GET['id'];
$order=$order->getById($id);
?>
<div id="showOrder">
<section class="content-header" >
    <h1>
        Orders
        <small>Orders</small>
        <small>show</small>
    </h1>
</section>
<br><br>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border"><h3 class="box-title">show</h3></div>
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Product_id</th>
                        <th>Quantity</th>
                        <th>Total_Price</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th><?=$user->fname?></th>
                        <th><?=$order->product_id?></th>
                        <td><?=$order->quantity?></td>
                        <td><?=$order->total_price?></td>
                        <?php if($order->is_valid){?>
                            <td>Valid</td>
                        <?php }else{?>
                            <td>Invalid</td>
                        <?php }?>
                        <td><?=$order->created_at?></td>
                        <td><?=$order->updated_at?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(function () {
        $('.content').append($('#showOrder'));
        $('#example1').DataTable();

    });

</script>
