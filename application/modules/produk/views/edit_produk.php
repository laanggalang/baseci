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
                            <form class="form-horizontal" method="post" action="<?=base_url();?>produk/proses_edit/<?=simple_encrypt($produk_edit['id_produk'])?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nama Produk</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_produk" class="form-control" value="<?=$produk_edit['nama_produk']?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="deskripsi" class="form-control" value="<?=$produk_edit['deskripsi']?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Harga Produk</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="harga" class="form-control" value="<?=$produk_edit['harga']?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Stok</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="stok" class="form-control" value="<?=$produk_edit['stok']?>" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-sm-4 control-label">Kategori</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="id_kategori" class="form-control" value="<?=$produk_edit['id_kategori']?>" required>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Kategori</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kategori
                                    </button>
                                    <div class="dropdown-menu" arialabelledby="kategori">
                                        <a class="dropdown-item" value="<?$kategori['nama_kategori']?>"></a>
                                    </div>
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