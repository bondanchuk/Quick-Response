

<!DOCTYPE html>



<html>

    <!--<![endif]-->

    <!-- BEGIN HEAD -->
<link rel="shortcut icon" href="<?php echo base_url();?>img/logo_provinsi.ico">



    <head>

        <meta charset="utf-8" />

        <title>Login Admin</title>



        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Admin/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Operator/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/Admin/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <link href="<?php echo base_url();?>assets/login/css/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/login/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->

        <link href="<?php echo base_url();?>assets/login/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />

        <link href="<?php echo base_url();?>assets/login/css/plugins.min.css" rel="stylesheet" type="text/css" />

        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->

        <link href="<?php echo base_url();?>assets/login/css/login.min.css" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->

        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <!-- END HEAD -->



    <body class=" login">

        <!-- BEGIN LOGO -->

        <div class="logo">

            <a href="index">

                <img src="<?php echo base_url();?>img/provinsi2.png" alt="user-img" style="margin-top:-50px;margin-bottom:-30px;" class="img-circle"> </a>

        </div>

        <!-- END LOGO -->

        <!-- BEGIN LOGIN -->

        <div class="content">

            <!-- BEGIN LOGIN FORM -->

            <?php echo form_open("AdminLogin/cek_login"); ?>

                <h3 class="form-title font-green">Sign In Operator</h3>

                <div class="alert alert-danger display-hide">

                    <button class="close" data-close="alert"></button>

                    <span> Masukkan Username dan Password. </span>

                </div>

                <div class="form-group">

                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

                    <label class="control-label visible-ie8 visible-ie9">Email</label>

                    <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" required /> </div>

                <div class="form-group">

                    <label class="control-label visible-ie8 visible-ie9">Password</label>

                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required /> </div>

                <div class="form-actions">

                    <button type="submit" class="btn green uppercase">Login</button>

                    <label class="rememberme check mt-checkbox mt-checkbox-outline">

                        <input type="checkbox" name="remember" value="1" />Remember

                        <span></span>

                    </label>

                    <a href="#" id="" class="forget-password">Lupa Password?</a>

                </div>



                <div class="create-account">

                    <p>

                        <a href="#" id="" class="uppercase">Create an account</a>

                    </p>

                </div>

            <?php echo form_close(); ?>

            <!-- END LOGIN FORM -->

            <!-- BEGIN FORGOT PASSWORD FORM -->



            <!-- END FORGOT PASSWORD FORM -->

            <!-- BEGIN REGISTRATION FORM -->



            <!-- END REGISTRATION FORM -->

        </div>



        <!--[if lt IE 9]>

<script src="../assets/global/plugins/respond.min.js"></script>

<script src="../assets/global/plugins/excanvas.min.js"></script>

<![endif]-->

        <!-- BEGIN CORE PLUGINS -->

        <script src="<?php echo base_url();?>assets/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/Operator/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/login/js/js.cookie.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/login/js/jquery.slimscroll.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/login/js/jquery.blockui.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/login/js/bootstrap-switch.min.js" type="text/javascript"></script>

        <!-- END CORE PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <script src="<?php echo base_url();?>assets/login/js/jquery.validate.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/login/js/additional-methods.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/login/js/select2.full.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->

        <script src="<?php echo base_url();?>assets/login/js/app.min.js" type="text/javascript"></script>

        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <script src="<?php echo base_url();?>assets/login/js/login.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- BEGIN THEME LAYOUT SCRIPTS -->

        <!-- END THEME LAYOUT SCRIPTS -->

    <!-- Google Tag Manager -->

</body>

</html>

