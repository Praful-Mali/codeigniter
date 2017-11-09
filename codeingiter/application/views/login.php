<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo base_url()?>assets/js/jquery-1.12.4.min.js"></script>
    <style type="text/css">
        body{
            position: relative; /* required */
        }
    </style>

</head>
<body data-spy="scroll" data-target="#ws_tab_nav" data-offset="80">


<!--Main Content-->
<main >
    <section class="login-wrapper">
        <div id="login-box-wrp" class="box-wrapper" >
            <div class="login-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center col-md-offset-3 col-lg-offset-3">
                            <!-- START Registration form -->

                            <div class="panel panel-form">
                                <!-- Form header -->
                                <div class="panel-heading text-center">
                                    <h2 class="title">Login </h2>
                                </div>

                                <div class="panel-body">
                                    <form role="form" method="POST" action="javascript:void(0)">
                                        <div class="alert alert-danger hide" id="login_register_alert">
                                            <strong>Error!</strong> <span></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="txtUserName">Email<span class="required-field">*</span></label>
                                                        <input type="email" class="form-control" name="login_email" id="login_email">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="userPassword">Password<span class="required-field">*</span></label>
                                                        <input type="password" class="form-control" name="login_password" id="login_password">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <button type="submit"  id="login_register" onclick="checklog();" class="btn custom_btn">
                                                                Sign In
                                                            </button>
                                                            Don't have a account? <a href="<?php echo base_url() ?>" >Create an Account</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Form footer -->
                                <div class="panel-footer">
                                    <span class="required-field">*</span> - required field
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>





<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script>
    function createErrorAlert(element,msg)
    {
        $('#'+element+'_alert').removeClass('hide');
        $('#'+element+'_alert').find('span').text(msg);
        return false;
    }
    function checklog(){
        $('#login_register_alert').addClass('hide');
        var login_email = $('#login_email').val();
        var login_password = $('#login_password').val();
        var validFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})|([0-9]{10})+$/;

        if(login_email == ''){
            createErrorAlert('login_register','Please Enter a Valid Email-id or Mobile No.!');
            return false;
        } else if(!validFormat.test(login_email)){
            createErrorAlert('login_register','Please Enter a Valid Email-id or Mobile No.!');
            return false;
        } else if($.isNumeric(login_email) && (login_email.length != 10)) {
            createErrorAlert('login_register','Please Enter a Valid Mobile No.!');
            return false;
        } else if(login_password == '') {
            createErrorAlert('login_register', 'Please Enter a Password!');
            return false;
        }else {
            var values = 'username=' + login_email + '&password=' + login_password ;
            $.ajax({
                url: "<?php echo base_url()?>logging",
                type: "POST",
                data: values,
                beforeSend: function () {
                    $("#login_register").empty().append("<i class='fa fa-spinner fa-pulse'></i> Logging...");
                },
                success: function (response) {

                    var dataArray = jQuery.parseJSON(response);
                    if (dataArray.status == 'F') {
                        createErrorAlert('login_register','Password Invalid!!!!');
                        $("#login_register").empty().append("login");
                        return false;
                    } else {
                        window.location.href="<?php echo base_url('myprofile')?>";
                    }
                }
            });
        }
    }
</script>

</body>
</html>