<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';

if(isset($_GET)){
    $id=$_GET['id'];
    $id=clearInputs($id);
    $user=new User();
    $user=$user->getById($id);
    //echo $user->fname;

}
?>
<div class="box box-primary" id="usersEdit">
    <div class="box-body">
        <div id="errors"></div>

<!--        <form action="" method="">-->
        <div class="row">
            <!--
                   id 	fname 	lname 	password 	birthday 	job 	email 	credit_limit 	address
                   interests 	is_admin 	is_valid 	created_at 	updated_at
                   -->

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Fname</label>
                    <input class="form-control" type="text" disabled name="fname" value="<?=$user->fname?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Lname</label>
                    <input class="form-control" type="text" disabled name="lname" value="<?=$user->lname?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" disabled name="email" value="<?=$user->email?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Job</label>
                    <input class="form-control" type="text" disabled name="username" value="<?=$user->job?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Credit_Limit</label>
                    <input class="form-control" type="tel" disabled name="phone1" value="<?=$user->credit_limit?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Address</label>
                    <input class="form-control" type="tel" disabled name="phone2" value="<?=$user->address?>">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>SignUp_Date</label>
                    <input class="form-control" type="text" disabled name="created_at" value="<?=$user->created_at?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label>Status</label>
                    <?php if($user->is_valid){
                    ?><input class="form-control" type="text" disabled name="is_valid" value="Valid">
                   <?php } else {?>
                    <input class="form-control" type="text" disabled name="is_valid" value="InValid">
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4 pull-right">
            <div class="form-group">
                <!--                    <label>Status</label>-->
                <div class="dropdown pull-right">
                    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Status
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a  href="" id="validUser" name="<?=$user->id?>"><i class="pull-right glyphicon glyphicon-ok-sign"></i>Vaild</a></li>
                        <!--                                    <hr>-->
                        <li><a   href="" id="invalidUser" name="<?=$user->id?>"><i class="pull-right glyphicon glyphicon-remove-sign"></i>Invalid</a></li>
                    </ul>
                </div>
            </div>
        </div>

<!--        <input type="submit" class="btn btn-success pull-left" value="Update">-->

<!--        </form>-->

    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#usersEdit'));

        $("#validUser").on("click",function () {
//
//            alert("valid")
            $.ajax({
                url: "/users/update.php",
                method: "POST",
                data:{
                    id:$("#validUser").attr('name'),
                    valid:1
                },
                success: function (obj) {
                    console.log(obj);
                }
            });
        });
        $("#invalidUser").on("click",function () {
//
//            alert("invalid")
            $.ajax({
                url: "/users/update.php",
                method: "POST",
                data:{
                    id:$("#invalidUser").attr('name'),
                    valid:0
                },
                success: function (obj) {
                    console.log(obj);
                }
            });
        });
    });

</script>
