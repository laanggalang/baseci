<div id="content">
    <!-- Main content -->
    <section class="style-default-bright">
        <div class="section-header">
            <h2 class="text-primary"><?php echo $title; ?></h2>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-body">
                            <br>
                            <form class="form-horizontal" method="post" action="<?=base_url();?>kategori/proses_edit/<?=simple_encrypt($kategori_edit['id_kategori'])?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nama kategori</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_kategori" class="form-control" value="<?=$kategori_edit['nama_kategori']?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="desc_kategori" class="form-control" value="<?=$kategori_edit['desc_kategori']?>" required>
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