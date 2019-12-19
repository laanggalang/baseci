<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url(); ?></loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url('c/flutter')?></loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url('c/angular-7')?></loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url('c/website')?></loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url('c/plugins')?></loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url('c/tips-tricks')?></loc>
     <priority>1.0</priority>
  </url>
  <?php foreach($produk as $data) { ?>
  <url>
     <loc><?php echo base_url().$data->link_artikel;?></loc>
     <priority>0.5</priority>
     <lastmod><?php echo $data->tgl_publish;?></lastmod>
  </url>
  <?php } ?>
</urlset>