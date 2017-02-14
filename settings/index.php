<?php
require '../config.php';
require_once '../functions.php';
require_once '../admin.php';
$setting=new Settings();
$settings=$setting->getAll();
$setting=$settings[0];
?>
<div class="box box-info" id="settings">
    <div class="box-header with-border ">
        <br><h3 class="box-title">Main Settings <br><br><br></h3><span class="fa fa-edit pull-right"><a href="/settings/edit.php">Edit</a></span>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row col-md-8 col-md-offset-2">

            <form class="form" id="showSettingForm">
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteTitle" class="col-md-3 control-label ">Site Title</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" id="title" disabled value="<?=$setting["title"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteUrl" class="col-md-3 control-label">Main Link1</label>

                        <div class="col-md-6">
                            <input type="url" class="form-control" name="main_link1" id="main_link1" disabled value="<?=$setting["main_link1"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteUrl" class="col-md-3 control-label">Main Link2</label>

                        <div class="col-md-6">
                            <input type="url" class="form-control" name="main_link2" id="main_link2" disabled value="<?=$setting["main_link2"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteUrl" class="col-md-3 control-label">Main Link3</label>

                        <div class="col-md-6">
                            <input type="url" class="form-control" name="main_link3" id="main_link3" disabled value="<?=$setting["main_link3"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Home Section1</label>

                        <div class="col-md-6">
                            <input type="url" class="form-control" name="home_txt1" id="home_txt1" disabled value="<?=$setting["home_txt1"]?>">

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteEmail" class="col-md-3 control-label">Home Section2</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="home_txt2" id="home_txt2" disabled value="<?=$setting["home_txt2"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Telephone</label>

                        <div class="col-md-6">
                            <input type="url" class="form-control" name="tel" id="tel" disabled value="<?=$setting["tel"]?>">

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Email</label>

                        <div class="col-md-6">
                            <input type="url" class="form-control" name="email" id="email" disabled value="<?=$setting["email"]?>">

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Address</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="address" id="address" disabled cols="30" rows="5"><?=$setting["address"]?></textarea>

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="fb" class="col-md-3 control-label">Facebook</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="fb" id="fb" disabled value="<?=$setting["fb"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="tw" class="col-md-3 control-label">Twitter</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="tw" id="tw" disabled value="<?=$setting["tw"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kham" class="col-md-3 control-label">RSS</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="rss" id="rss" disabled value="<?=$setting["rss"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="lang" class="col-md-3 control-label">Copy Rights Text</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="rights" id="rights" disabled value="<?=$setting["rights"]?>">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#settings'));
//        $('#example1').DataTable();
//        $('#delUser').on("click",function () {
////            alert('ok')
//            $.ajax({
//                url: "/users/delete.php/?id="+$("#delUser").attr('name'),
//                method: "GET",
//                success: function (obj) {
//                    console.log(obj);
//                }
//            });
//        });
    });

</script>
