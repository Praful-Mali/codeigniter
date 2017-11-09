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
                                    <h2 class="title">My Profile</h2>
                                </div>

                                <div class="panel-body">
                                                                    <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <legend>User Details</legend>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="first_name">First Name :</label>
                                                    <label> <?php echo isset($data[0]['first_name'])?$data[0]['first_name']:''?></label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="last_name">Last Name :</label>
                                                    <label> <?php echo isset($data[0]['last_name'])?$data[0]['last_name']:''?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="email">Email :</label>
                                                    <label> <?php echo isset($data[0]['email'])?$data[0]['email']:''?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="username">Username :</label>
                                                    <label> <?php echo isset($data[0]['user_name'])?$data[0]['user_name']:''?></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 border-left">
                                        <fieldset>
                                            <legend>Contact Details</legend>
                                            <div class="row">
                                                <div class="form-group col-md-6" style="margin-bottom:0;">
                                                    <label for="mobile" >Mobile Number :</label>
                                                    <label> <?php echo isset($data[0]['phone_no'])?$data[0]['phone_no']:''?></label>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="dob">DOB :</label>
                                                    <label> <?php echo isset($data[0]['dob'])?$data[0]['dob']:''?></label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Gender :</label>
                                                    <label> <?php echo isset($data[0]['gender'])?$data[0]['gender']:''?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group text-center">
                                                    <div class="col-md-12">
                                                        <a href="<?php echo base_url()?>logout"  >Logout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
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


</body>
</html>