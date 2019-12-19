<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>

        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website - by riza">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/material-design-iconic-font.min.css?1421434286" />

        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862" />

        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858" />

        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1423393666" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/typeahead/typeahead.css?1424887863" />


        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />

        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/toastr/toastr.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/libs/summernote/summernote.css?1425218701" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/sweetalert.css" />
        <link type="text/css" rel="stylesheet" href="<?=base_url();?>lib/new/css/theme-default/materialadmin_print.css?1419847669"  media="print"/>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script type="text/javascript" src="<?=base_url();?>lib/new/js/libs/utils/html5shiv.js?1403934957"></script>
<script type="text/javascript" src="<?=base_url();?>lib/new/js/libs/utils/respond.min.js?1403934956"></script>
<![endif]-->
        <script src="<?=base_url();?>lib/new/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/spin.js/spin.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/moment/moment.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>


        <script src="<?=base_url();?>lib/new/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="<?=base_url();?>lib/new/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>

        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>


        <script src="<?=base_url();?>lib/new/js/libs/toastr/toastr.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/App.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppNavigation.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppOffcanvas.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppCard.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppForm.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppNavSearch.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/source/AppVendor.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/demo/Demo.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/demo/DemoTableDynamic.js"></script>
        <script src="<?=base_url();?>lib/new/js/core/demo/DemoUIMessages.js"></script>
        <script src="<?=base_url();?>lib/new/js/sweetalert.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <!-- include summernote css/js -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

        <script>
            $(document).ready(function(){
                $('.textarea').summernote();
                $('.datepicker').datepicker();
            });
        </script>
    </head>
    <body class="menubar-hoverable header-fixed menubar-pin">

        <!-- BEGIN HEADER-->
        <header id="header" >
            <div class="headerbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="headerbar-left">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand" >
                            <div class="brand-holder">
                                <a href="<?=base_url();?>admin/home">
                                    <span class="text-lg text-bold text-primary"><?php echo $title; ?></span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="headerbar-right">

                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                <img src="<?=base_url();?>lib/new/img/no-image.jpg?1403934956" alt="" />
                                <span class="profile-info">
                                    <?php echo $_SESSION['username']; ?>
                                    <small></small>
                                </span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li>
                                    <a href="<?=base_url();?>administrator/out"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a>
                                </li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-profile -->
                 
                </div><!--end #header-navbar-collapse -->
            </div>
        </header>
        <!-- END HEADER-->

        <!-- BEGIN BASE-->
        <div id="base">

            <!-- BEGIN OFFCANVAS LEFT -->
            <div class="offcanvas">
            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS LEFT -->

            <!-- Content -->
            <?php $this->load->view($views); ?>
            <!-- Content -->

            <!-- BEGIN MENUBAR-->
            <div id="menubar">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="expanded">
                        <a href="<?=base_url();?>admin/home">
                            <span class="text-lg text-bold text-primary">Devanalogy</span>
                        </a>
                    </div>
                </div>
                <div class="menubar-scroll-panel">
                    <!-- BEGIN MAIN MENU -->
                    <ul id="main-menu" class="gui-controls">
                        <li>
                            <a href="<?=base_url();?>user/">
                                <div class="gui-icon"><i class="fa fa-user"></i></div><span class="title">User</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>produk/">
                                <div class="gui-icon"><i class="fa fa-folder"></i></div><span class="title">Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>kategori/">
                                <div class="gui-icon"><i class="fa fa-list-alt"></i></div><span class="title">Kategori</span>
                            </a>
                        </li>
                    </ul><!--end .main-menu -->
                    <!-- END MAIN MENU -->
                    <div class="menubar-foot-panel">
                        <small class="no-linebreak hidden-folded">
                            <span class="opacity-75">&copy; 2017</span> Powered by <strong>Devanalogy</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
        </div><!--end #base-->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">File Manager</h4>
              </div>
              <div class="modal-body">
                <form class="form-inline" id="uploadfile" method="post" action="<?=base_url()?>filemanager/uploadfile" enctype="multipart/form-data">
                    <div class="form-group">
                        ./lib/blog/ <input type="file" name="file" required class="form-control">
                    </div>
                    <button class="btn btn-primary klik">Upload</button>
                </form>
                <div class="text-center row" id="loadfilehere" style="max-height: calc(100vh - 210px);overflow-y: auto">
                    <i>Loading...</i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <script>
            $(document).ready(function(){
                var base_url = "<?=base_url()?>";
                
                function loadfilelist(){
                    var loadfile = '';
                    $.ajax({
                        'type' : 'GET',
                        'url' : base_url + 'filemanager/readfolder',
                        'dataType' : 'JSON',
                        success : function(response){
                            for(var i = 0; i < response.data.length; i++){

                                if(response.data[i].tipe == 'file'){
                                    var aksi = ' <input class="form-control" type="text" value="'+base_url+''+response.data[i].directory+''+response.data[i].nama +'">  <button data-img="'+response.data[i].file+'" class="btn btn-xs btn-danger imgclick">Delete</button>';
                                }else{
                                    var aksi = response.data[i].directory+''+response.data[i].nama+'/ <br> <button data-img="'+response.data[i].file+'" class="btn btn-xs btn-info">Open</button>';
                                }

                                loadfile += '<div class="col-sm-3" style="margin-bottom:10px"><img src="'+base_url+''+ response.data[i].directory+''+response.data[i].nama +'" class="img-responsive" style="height:150px; object-fit:cover"> ' + aksi + ' </div>';
                                
                            }
                            $('#loadfilehere').html(loadfile);
                        }
                    }) 
                }
                
                $('#myModal').on('shown.bs.modal', function (e) {
                    loadfilelist();
                });
                
                $(document).on('click','.imgclick',function(){
                    var r = confirm("Are you sure you want to delete this Image?")
                    if(r == true)
                    {
                        var form_data = {
                            'img' : $(this).attr('data-img')
                        }
                        $.ajax({
                            'type' : 'POST',
                            'url' : base_url + 'filemanager/deletefile',
                            'dataType' : 'JSON',
                            'data' : form_data,
                            success : function(response){
                                loadfilelist();
                            }
                        });
                    }
                })
                
                $(document).on('submit','#uploadfile',function(e){
                    e.preventDefault();
                    var data = new FormData(this);
            
                    $( document ).ajaxStart(function() {
                        $( ".klik" ).text('Loading...');
                    }).ajaxStop(function() {
                        $( ".klik" ).text('Upload');
                    });
                    $.ajax({
                        'type': 'POST',
                        'url': $(this).attr('action'),
                        'data': data,
                        'processData': false,
                        'contentType': false,
                        'cache': false,
                        success: function(response) {
                            $("#uploadfile input[name='file']").val("");
                            loadfilelist();
                        }
                    });
                });
            })
        </script>
        
    </body>
</html>