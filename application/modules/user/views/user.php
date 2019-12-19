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
                            <h3 class="box-title"><a href="<?=base_url();?>user/add_user"><button type="button" class="btn btn-primary">Add new</button></a></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>nama</th>
                                            <th>alamat</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1; foreach($user as $art): ?>
                                        <tr>
                                            <td><?php echo $x++; ?></td>
                                            <td><?php echo $art['nama']; ?></td>
                                            <td><?php echo $art['alamat']; ?></td>
                                            <td>
                                                <a href="<?=base_url();?>user/edit/<?php echo simple_encrypt($art['id_user']); ?>" class="btn btn-flat btn-warning">Edit</a>
                                                &nbsp;&nbsp;
                                                <a onClick="return confirm('Are you sure?')" class="btn btn-flat btn-danger" href="<?=base_url();?>user/hapus/<?php echo simple_encrypt($art['id_user']);?>">Delete</a> 
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