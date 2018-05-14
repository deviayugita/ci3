<!DOCTYPE html>
<?php $this->load->view('user/HeaderHome');?>
     <!-- blog -->
    <section class="bg-light" id="blog">
      <div class="container">

      
        <!-- <div class="col-lg-2"></div> -->

          
            <h2 class="section-heading text-uppercase text-center">Blog</h2>
            <h3 class="section-subheading text-muted text-center">Recomended Blog.</h3>

            <div class="row">
             <?php foreach ($all_artikel->result() as $row) { ?>

             <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="jumbotron">
                
               <center> <img src="<?php echo site_url('assets/img/'.$row->Image) ?>" alt="Image" class="img-responsive" high="150" width="150">
              <p><strong><?php echo $row->Judul ?></strong></p>
            </center>
            <div class="portfolio-caption">
              <p class="text-muted">
                <?php echo character_limiter($row->Konten, 200)?>
              <a href="<?php echo site_url('Tugas/detail/'.$row->id)?>">Lanjutkan</a>
              </p>
            </div>
            
          </div></div>
          <?php } ?>
          <!-- <div class="col-lg-2"></div> -->
     </div>


</div>
     <?php 
    // $links ini berasal dari fungsi pagination 
    // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
    if (isset($links)) {
      echo $links;
    } 
    ?>
     </section></body>
<?php $this->load->view('user/footer');?>