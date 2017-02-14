<?php
require_once '../config.php';
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
            <div class="alert alert-info container-fluid" id="success" style="display: none;"></div>
            <div class="alert alert-danger container-fluid" id="error" style="display: none;"></div>
            <form class="form" id="updateSettingForm">
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteTitle" class="col-md-3 control-label ">Site Title</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" id="title"  value="<?=$setting["title"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteUrl" class="col-md-3 control-label">Main Link1</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="main_link1" id="main_link1"  value="<?=$setting["main_link1"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteUrl" class="col-md-3 control-label">Main Link2</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="main_link2" id="main_link2"  value="<?=$setting["main_link2"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteUrl" class="col-md-3 control-label">Main Link3</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="main_link3" id="main_link3"  value="<?=$setting["main_link3"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Home Section1</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="home_txt1" id="home_txt1"  value="<?=$setting["home_txt1"]?>">

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteEmail" class="col-md-3 control-label">Home Section2</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="home_txt2" id="home_txt2"  value="<?=$setting["home_txt2"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Telephone</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="tel" id="tel"  value="<?=$setting["tel"]?>">

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Email</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" id="email"  value="<?=$setting["email"]?>">

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="siteDesc" class="col-md-3 control-label">Address</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="address" id="address"  cols="30" rows="5"><?=$setting["address"]?></textarea>

                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="fb" class="col-md-3 control-label">Facebook</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="fb" id="fb"  value="<?=$setting["fb"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="tw" class="col-md-3 control-label">Twitter</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="tw" id="tw"  value="<?=$setting["tw"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="kham" class="col-md-3 control-label">RSS</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="rss" id="rss"  value="<?=$setting["rss"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="lang" class="col-md-3 control-label">Copy Rights Text</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="rights" id="rights"  value="<?=$setting["rights"]?>">
                        </div>
                    </div>
                </div>
                <div class="box-footer col-sm-4 col-sm-offset-3">
                    <button type="submit" name="submit" id="updateSettings" class="btn btn-primary" onclick="return false;">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.content').append($('#settings'));
//        $('#example1').DataTable();
        $('#updateSettings').on("click",function () {
//            alert('ok')
            $.ajax({
                url: "/settings/update.php",
                method: "POST",
                data:$("#updateSettingForm").serialize(),
                success: function (obj) {
                    if(obj=="updated"){
                        $("#error").hide();
                        $("#success").text("Updated Successfully.");
                        $("#success").fadeToggle(3000);
                    }else if(obj=="failed"){
                        $("#success").hide();
                        $("#error").text("Error Not Updated.");
                        $("#error").fadeToggle(3000);
                    }
                    console.log(obj);
//                    alert(obj);
                }
            });
        });
    });

</script>
