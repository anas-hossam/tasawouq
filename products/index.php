<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';
 $products=product::getProduct();
$cats=new Categories();

?>

<div class="row" id="products">

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Products</h3>
                <div class="form-group">
                    <input type="submit"  id="addproduct" class="btn btn-primary pull-right" value="Addproduct">
                </div>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Name</th>
                        <th>Category</th>
                        <th>price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($products as $product){?>
                    <tr>
                        <td><?= $product['name'] ?></td>
                        <?php $cat=$cats->getById($product['category_id']);?>
                        <td><?=$cat->name?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><img src="<?=$product['image']?>" width="150" height="100" alt="no image"/></td>
                        <td><?=  $product['created_at'] ?></td>
                        <td><?= $product['updated_at'] ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=PATH?>products/view.php/?id=<?=$product['id']?>"><i class="pull-right glyphicon glyphicon-edit"></i>view</a></li>
<!--                                    <hr>-->
                                      <li><a href="<?=PATH?>products/edit.php/?id=<?=$product['id']?>"><i class="pull-right glyphicon glyphicon-edit"></i>edit</a></li>
                                    <li><a  class="delproduct" href="" name="<?=$product['id']?>"><i class="pull-right glyphicon glyphicon-remove"></i>delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php }?>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>price</th>
                        <th>Quantity</th>
                        <th>Image</th>
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
        $('.content').append($('#products'));
        $('#example1').DataTable();
        $('#addproduct').on("click",function(){
        window.location.href="../products/add.php";
        });

    });
    $('.delproduct').on("click",function (e) {

        $.ajax({
            url:"/products/delete.php/?id="+$(this).attr('name'),
              method:"GET",
            success: function (response) {
               alert(response);
              location.reload();

            }
        })
      })

</script>
