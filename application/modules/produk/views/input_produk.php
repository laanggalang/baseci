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
                            <form class="form-horizontal" method="post" action="<?=base_url();?>produk/proses_add" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nama Produk</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_produk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="deskripsi" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="harga" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Stok</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="stok" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Kategori</label>
                                    <div class="col-sm-8">
                                        <select name="id_kategori" class="form-control" required>
                                            <option value="">Pilih Kategori</option>
                                            <?php foreach($kategori as $b): ?>
                                            <option value="<?php echo $b['id_kategori']?>"><?php echo $b['nama_kategori']?></option>
                                            <?php endforeach; ?>    
                                        </select>
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
      