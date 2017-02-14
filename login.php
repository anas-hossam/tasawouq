<?php

require_once 'admin.php';

?>
<div class="container" id="login" style="position: absolute; top: 30%;">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2">
            <div >

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="">

<!--                                @if ($errors->has('email'))-->
                                <span class="help-block">
                                        <strong id="error1" style="color: red">Incorrect e-mail, please try again</strong>
                                    </span>
<!--                                @endif-->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

<!--                                @if ($errors->has('password'))-->
                                <span class="help-block">
                                        <strong id="error2" style="color: red">Incorrect password, please try again</strong>
                                    </span>
<!--                                @endif-->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" id="btnlogin" class="btn btn-primary" onclick="return false;">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#main").append($("#login"));
        $("#login").hide();
        <?php if(!isset($_SESSION["logged"])){?>
        $("#mainsidebar").hide();
        $("#usermenu").hide();
        $("#error1").hide();
        $("#error2").hide();
        $("#login").show();
        <?php }?>
        $("#btnlogin").on("click",function (e) {
           // return false;
            $.ajax({
                url:"loginController.php",
                method:"POST",
                data:{
                    email:$("#email").val(),
                    password:$("#password").val()
                },
                success:function (obj) {

                    if(obj!="failed") {  //login admin success
                        if (JSON.parse(obj).email == "admin@tasawouq.com") {
                            $("#mainsidebar").show();
                            $("#usermenu").show();
                            $("#main").text("");
                            location.reload();
                        }
                    }else {  //login admin failed

                        if ($("#email").val()== "admin@tasawouq.com"){
                            $("#error2").show();
                            $("#error1").hide();
                        }else {
                            $("#error1").show();
                            $("#error2").hide();
                        }

                    }
                }
            });

    });

    });

</script>