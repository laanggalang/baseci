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
                            <h3 class="box-title"><a href="<?=base_url();?>article/add_article"><button type="button" class="btn btn-primary btn-flat">Add new</button></a></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">

                            <hr>
                            <div class="row">

                                <div class="col-md-10">

                                    <h3><b> "<?php echo $article['judul_artikel']; ?>" </b></h3>
                                    <h5>Tanggal :&nbsp; <?php echo $article['tgl_artikel'];?></h5>
                                    <h5>Link &nbsp;&nbsp;&nbsp; &nbsp;  :&nbsp; <a href="../../../<?php echo $article['link_artikel'];?>"><?php echo $article['link_artikel'];?></a></h5>
                                    
                                </div>
                                <div class="col-md-2">
                                    <a href="<?=base_url();?>article/edit/<?php echo simple_encrypt($article['id_artikel']); ?>" class="btn btn-flat btn-primary">Edit</a>
                                    &nbsp;&nbsp;
                                    <a onClick="return confirm('Are you sure?')" class="btn btn-flat btn-danger" href="<?=base_url();?>article/hapus/<?php echo simple_encrypt($article['id_artikel']);?>">Delete</a> 
                                    <br> <br> <br>
                                    <span class='pull-right text-muted'> <?php  echo $num;  ?> comments &nbsp;&nbsp;</span>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?=base_url();?>assets/images/artikel/<?php echo $article['gambar_artikel']; ?>" width="100%">
                                    <i><?php echo $article['keterangan_gambar'];?></i>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $article['isi_artikel'];  ?>
                                </div>
                            </div>


                            <br>

                            <div class='box-footer box-comments'>
                                <?php foreach($comment as $com): ?>
                                <div class='box-comment'>

                                    <img class='img-circle img-sm' src='<?=base_url();?>assets/dist/img/avatar5.jpg' alt='user image'>
                                    <div class='comment-text'>
                                        <span class="username">
                                            <?php echo $com->nama." - ".$com->email;?>
                                            <span class='text-muted pull-right'><?php echo $com->tgl_comment;?> 
                                                <a onClick="return confirm('Are you sure?')" href="<?=base_url();?>article/delete/<?php echo $article['id_artikel']; ?>/<?php echo $com->id_comment; ?>">Hapus</a> </span>
                                        </span>
                                        <?php echo $com->comment;?>
                                    </div>
                                </div>
                            </div> 
                            <hr>
                            <?php endforeach; ?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section>
</div>
