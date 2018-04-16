<!DOCTYPE html>
<?php $this->load->view('Profil/header');?>
     <!-- blog -->
    <section class="bg-light" id="blog">
      <div class="container">

      <div class="row">
        <div class="col-lg-2"></div>

        <div class="col-lg-8">
          <div class="jumbotron">
            <h2 class="section-heading text-uppercase text-center">Blog</h2>
            <h3 class="section-subheading text-muted text-center">Recomended Blog.</h3>
          
             <?php foreach ($Blog as $row) { ?>

              <p><strong><?php echo $row->Judul ?></strong></p>
            
            <div class="portfolio-caption">
              <p class="text-muted">
                <?php echo character_limiter($row->Konten, 200)?>
              <a href="<?php echo site_url('Tugas/detail/'.$row->id)?>">Lanjutkan</a>
              </p>
            </div>
            
              <a href="<?php echo site_url('Tugas/update/'.$row->id)?>"><button class="btn btn-primary">Update</button></a>
             <a onclick="javascript:return confirm('Apakah anda ingin menghapus data ini ?')" href="<?php echo site_url('Tugas/delete/'.$row->id) ?>"><button class="btn btn-danger">Delete</button></a>
          
          <?php } ?>
          </div></div>
          <div class="col-lg-2"></div>
     </div>

</div></section></body>
<?php $this->load->view('Profil/footer');?>