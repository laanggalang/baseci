<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->
        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/toastr/toastr.css">
        <!-- END STYLESHEETS -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script type="text/javascript" src="<?=base_url();?>lib/new/js/libs/utils/html5shiv.js?1403934957"></script>
<script type="text/javascript" src="<?=base_url();?>lib/new/js/libs/utils/respond.min.js?1403934956"></script>
<![endif]-->
        <!-- BEGIN JAVASCRIPT -->
        <script src="<?=base_url();?>lib/new/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/spin.js/spin.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/toastr/toastr.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/App.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppNavigation.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppOffcanvas.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppCard.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppForm.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppNavSearch.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppVendor.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/demo/Demo.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/demo/DemoUIMessages.js"></script>
        <!-- END JAVASCRIPT -->
    </head>
    <body class="menubar-hoverable header-fixed ">
        <!-- BEGIN LOGIN SECTION -->
        <section class="section-account">
            <div class="card contain-sm style-transparent">
                <div class="card-body">
                    <div class="row">
                        <?php echo $this->session->flashdata('message');?>
                        <div class="col-sm-6 col-md-offset-3">
                            <br/>
                            <span class="text-lg text-bold text-primary">LOGIN</span>
                            <br/><br/>
                            <form class="form floating-label" id="formlogin" action="<?=base_url();?>administrator/auth" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" required autofocus>
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <label for="password">Password</label>
                                    <!--<p class="help-block"><a href="#">Forgotten?</a></p>-->
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-xs-12 text-right">
                                        <button class="btn btn-primary btn-raised" type="submit">
                                            Login
                                            <span id="loadingnih" style="display:none;">
                                                <img src="<?=base_url();?>lib/new/img/loading.gif" alt="loading..." />
                                            </span>
                                        </button>
                                    </div><!--end .col -->
                                </div><!--end .row -->
                            </form>
                        </div>
              
                    </div><!--end .card -->
                </div>
            </div>
        </section>
        <!-- END LOGIN SECTION -->
        <script>
            $(document).ready(function() {
                $('#formlogin').submit(function() {
                    $( document ).bind("ajaxStart",function() {
                        $( "#loadingnih" ).show();
                    }).bind("ajaxStop",function() {
                        $( "#loadingnih" ).hide();
                    });
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        success: function(response) {
                            console.log(response)
                            if(response == 'success'){
                                location.href = "<?=base_url()?>user";
                            }else{
                                toastr.error('Username dan password tidak sesuai, silakan ulangi kembali.', 'Maaf login gagal!');
                            }
                            $(document).unbind("ajaxStart");
                        }
                    });
                    return false;
                });
            });
        </script>
    </body>
</html>
