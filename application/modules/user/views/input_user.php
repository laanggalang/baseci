<div id="content">
    <!-- Main content -->
    <section class="style-default-bright">
        <div class="section-header">
            <h2 class="text-primary"><?php echo $title; ?></h2>
            <!-- Button trigger modal -->
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="box">
                        <div class="box-body">
                            <br>
                            <form class="form-horizontal" method="post" action="<?=base_url();?>user/proses_add" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="alamat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </form>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      