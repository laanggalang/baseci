<div id="content">
    <!-- Main content -->
    <section class="style-default-bright">
        <div class="section-header">
            <h2 class="text-primary"><?php echo $title; ?></h2>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><a href="<?=base_url();?>produk/add_produk"><button type="button" class="btn btn-primary">Add new</button></a></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi</th>
                                            <th>Harga Produk</th>
                                            <th>Stok</th>
                                            <th>Kategori</th>
                                            <th>User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1; foreach($produk as $b): ?>
                                        <tr>
                                            <td><?php echo $x++; ?></td>
                                            <td><?php echo $b['nama_produk']; ?></td>
                                            <td><?php echo $b['deskripsi']; ?></td>
                                            <td><?php echo $b['harga']; ?></td>
                                            <td><?php echo $b['stok']; ?></td>
                                            <td><?php echo $b['nama_kategori']; ?></td>
                                            <td><?php echo $b['nama']; ?></td>
                                            <td>
                                                <a href="<?=base_url();?>produk/edit/<?php echo simple_encrypt($b['id_produk']); ?>" class="btn btn-flat btn-warning">Edit</a>
                                                &nbsp;&nbsp;
                                                <a onClick="return confirm('Are you sure?')" class="btn btn-flat btn-danger" href="<?=base_url();?>produk/hapus/<?php echo simple_encrypt($b['id_produk']);?>">Delete</a> 
                                                &nbsp;&nbsp;
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section><!-- /.content -->
      </div><!-- /.content-wrapper -->