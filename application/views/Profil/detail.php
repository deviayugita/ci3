<?php $this->load->view('Profil/header');?> 
     <!-- detail -->
<body>
    <section class="bg-light" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Blog</h2>
            <h3 class="section-subheading text-muted">Detail Blog.</h3>
          </div>
        </div>
        <div class="row"><center>

          <div class="jumbotron"> 
          <div class="col-lg-12">
            <strong><h1><?php echo $Blog_list['Judul'] ?></h1></strong>
          </div>
          <div class="col-lg-12">
            <p><?php echo "<img src='".base_url()."assets/img/".$Blog_list['Image']."' width='200' height='150'>"?></p>
          </div>
          <div class="col-lg-12">
            <i><?php echo $Blog_list['Autor'] ?></i>
          </div>
          <div class="col-lg-12">
            <i><?php echo $Blog_list['Tanggal'] ?></i>
          </div>
         <div class="col-lg-12">
            <?php echo $Blog_list['Konten'] ?>
          </div>
        </div>

 </div></div>
</center>
</section>

</body>

 <?php $this->load->view('Profil/footer');?>