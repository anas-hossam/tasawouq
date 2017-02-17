<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';

$user=new User();
$users=$user->getAllUsers();
?>
<div class="row" id="users">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <!--
                    id 	fname 	lname 	password 	birthday 	job 	email 	credit_limit 	address
                    interests 	is_admin 	is_valid 	created_at 	updated_at
                    -->

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Credit_Limit</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($users as $user){?>
                    <tr>
                        <td><?=$user['fname'].' '.$user['lname']?></td>
                        <td><?=$user['email']?></td>
                        <td><?=$user['credit_limit']?></td>
                        <td><?php if($user['is_valid']==1)echo "Valid";
                            else echo "Invalid";?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=PATH?>users/edit.php/?id=<?=$user['id']?>"><i class="pull-right glyphicon glyphicon-edit"></i>edit</a></li>
<!--                                    <hr>-->
                                    <li><a  class="delUser" href="" name="<?=$user['id']?>"><i class="pull-right glyphicon glyphicon-remove"></i>delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php }?>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Credit_Limit</th>
                        <th>Status</th>
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
        $('.content').append($('#users'));
        $('#example1').DataTable();
        $('.delUser').on("click",function () {
//            alert('ok')
            $.ajax({
                url: "/users/delete.php/?id="+$(this).attr('name'),
                method: "GET",
                success: function (obj) {
                    console.log(obj);
                }
            });
        });
    });

</script>
