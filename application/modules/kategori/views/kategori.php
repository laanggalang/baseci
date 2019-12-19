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
                            <h3 class="box-title"><a href="<?=base_url();?>kategori/add_kategori"><button type="button" class="btn btn-primary">Add new</button></a></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Nama Kategori</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1; foreach($kategori as $b): ?>
                                        <tr>
                                            <td><?php echo $x++; ?></td>
                                            <td><?php echo $b['nama_kategori']; ?></td>
                                            <td><?php echo $b['desc_kategori']; ?></td>
                                            <td>
                                                <a href="<?=base_url();?>kategori/edit/<?php echo simple_encrypt($b['id_kategori']); ?>" class="btn btn-flat btn-warning">Edit</a>
                                                &nbsp;&nbsp;
                                                <a onClick="return confirm('Are you sure?')" class="btn btn-flat btn-danger" href="<?=base_url();?>kategori/hapus/<?php echo simple_encrypt($b['id_kategori']);?>">Delete</a> 
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