<!DOCTYPE html>
<?php $this->load->view('admin/header');?>
     <!-- blog -->
    <section class="bg-light" id="kategori">
      <div class="container">

            <h2 class="section-heading text-uppercase text-center">Kategori</h2>
            <h3 class="section-subheading text-muted text-center">Recomended kategori.</h3>

            <div class="row">
          
             <?php foreach ($Kategori as $row) { ?>

             <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="jumbotron">

              <p><strong><?php echo $row->nama ?></strong></p>
            
            <div class="portfolio-caption">
              <p class="text-muted">
                <?php echo character_limiter($row->deskripsi, 200)?>
              </p>
            </div>
            
              <a href="<?php echo site_url('Admin/update_kategori/'.$row->id_kategori)?>"><button class="btn btn-primary">Update</button></a>
             <a onclick="javascript:return confirm('Apakah anda ingin menghapus data ini ?')" href="<?php echo site_url('Admin/delete_kategori/'.$row->id_kategori) ?>"><button class="btn btn-danger">Delete</button></a>
          
          
          </div>
        </div>
        <?php } ?>
      </div></div>
      <?php 
    // $links ini berasal dari fungsi pagination 
    // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
    if (isset($links)) {
      echo $links;
    } 
    ?>
        </section>
      </body>
<?php $this->load->view('admin/footer');?>