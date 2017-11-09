<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
        <div id="signup-box-wrp" class="box-wrapper" >
            <div class="signup-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center col-md-offset-2 col-lg-offset-2">
                            <!-- START Registration form -->

                            <div class="panel panel-form">
                                <!-- Form header -->
                                <div class="panel-heading text-center">
                                    <h2 class="title">Register</h2>
                                </div>

                                <div class="panel-body">
                                    <div class="alert alert-danger hide " id="register_alert">
                                        <strong>Error!</strong> <span></span>
                                    </div>
                                    <form role="form" method="POST" action="<?php echo base_url('user-registered')?>" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <fieldset>
                                                    <legend>User Details</legend>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="first_name">First Name<span class="required-field">*</span></label>
                                                            <input type="text" class="form-control" name="first_name" value="" id="first_name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="last_name">Last Name<span class="required-field">*</span></label>
                                                            <input type="text" class="form-control" name="last_name" id="last_name">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="email">Email<span class="required-field">*</span></label>
                                                            <input type="email" class="form-control"  name="email" value="" id="email">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="username">Username<span class="required-field">*</span></label>
                                                            <input type="text" class="form-control" name="username" id="username">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="password">Password<span class="required-field">*</span></label>
                                                            <input type="password" class="form-control" name="password" id="password">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="confirm_password">Confirm Password<span class="required-field">*</span></label>
                                                            <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 border-left">
                                                <fieldset>
                                                    <legend>Contact Details</legend>
                                                    <div class="row">
                                                        <div class="form-group col-md-6" style="margin-bottom:0;">
                                                            <label for="mobile" >Mobile Number<span class="required-field">*</span></label>
                                                            <input type="text" class="form-control" maxlength="10" name="mobile" value="" id="mobile">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="dob">DOB<span class="required-field">*</span></label>
                                                            <input type="date" class="form-control"  name="dob" value="" id="dob">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="gender">Gender<span class="required-field">*</span></label>
                                                            <select class="form-control" name="gender" id="gender" >
                                                                <option value="">Select Gender</option>
                                                                <option value="M">Male</option>
                                                                <option value="F">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control"  name="photo" id="photo">
                                                            <p class="help-block">Maximum upload file size: 4 MB</p>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group text-center">
                                                <div class="col-md-12">
                                                    <button type="submit" value="submit" id="register" onclick="return registerUser('register')"  class="btn custom_btn">
                                                        Register
                                                    </button>
                                                    <a href="<?php echo base_url()?>login"  >Already have an account?</a>
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
    var $base_url = $("#url").val();

    function registerUser(id){
        return true
        $('#register_alert').addClass('hide');
        var first_name = $("#first_name").val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var username = $("#username").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        var mobile = $("#mobile").val();
        var dob = $("#dob").val();
        var gender = $("#gender").val();


        var namePattern  = /^[a-zA-Z ]{2,30}$/;
        var mobilePattern = /^[1-9]{1}[0-9]{9}$/;
        var emailpattern = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;          /*/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/*/


        if(first_name == ''){
            createErrorAlert('register','Please Enter a First Name!');
            $("#first_name").focus();
            return false;
        } else if(namePattern.test(first_name) == false) {
            createErrorAlert('register', 'Please Enter a Valid First Name!');
            $("#first_name").focus();
            return false;
        }else if(last_name == ''){
            createErrorAlert('register','Please Enter a Last Name!');
            $("#last_name").focus();
            return false;
        } else if(namePattern.test(last_name) == false) {
            createErrorAlert('register','Please Enter a Valid Last Name!');
            $("#last_name").focus();
            return false;
        } else if(email == '') {
            createErrorAlert('register','Please Enter a Email Address!');
            $("#email").focus();
            return false;
        } else if(!emailpattern.test(email)){
            createErrorAlert('register','Please Enter a Valid Email Address !');
            $("#email").focus();
            return false;
        } else if(username == '') {
            createErrorAlert('register','Please Enter a Username!');
            $("#username").focus();
            return false;
        } else if(password == '') {
            createErrorAlert('register','Please Enter a Password!');
            $("#password").focus();
            return false;
        } else if(password.length < 8) {
            createErrorAlert('register', 'Password Must be more than 8 - 13 Characters!');
            $("#password").focus();
            return false;
        } else if(password != confirm_password) {
            createErrorAlert('register', 'Confirm Password Not Match !');
            $("#confirm_password").focus();
            return false;
        } else if(mobile == '') {
            createErrorAlert('register','Please Enter a Mobile Number!');
            $("#mobile").focus();
            return false;
        } else if(!$.isNumeric(mobile) || isNaN(mobile) || (mobile.length > 11 && mobile.length < 10)) {
            createErrorAlert('register_mobile', 'Please Enter a Valid Mobile No.!');
            $("#mobile").focus();
            return false;
        }else {
            return true
        }
    }

</script>

</body>
</html>