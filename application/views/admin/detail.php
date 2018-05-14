<?php $this->load->view('admin/header');?> 
     <!-- detail -->
<body>
    <section class="bg-light" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Blog</h2>
            <h3 class="section-subheading text-muted">Detail Blog.</h3>
          
          <div class="jumbotron"> 
            <strong><h1><?php echo $Blog_list['Judul'] ?></h1></strong>
          
            <i><?php echo $Blog_list['id_kategori'] ?></i>
          
            <p><?php echo "<img src='".base_url()."assets/img/".$Blog_list['Image']."' width='200' height='150'>"?></p>
          <p>
            <i><?php echo $Blog_list['Autor'] ?></i>
          </p>
            <p>
              <i><?php echo $Blog_list['Tanggal'] ?></i>
            </p>
            <p>
              <i><?php echo $Blog_list['id_kategori'] ?></i>
            </p>
           <!--  <p>
              <i><?php echo $kategori->nama ?></i>
            </p> -->
            <!-- <p>
              <?php
              echo "set_select('id_kategori',$data->id_kategori)";?>
            </p> -->
            <p>
              <?php echo $Blog_list['Konten'] ?>
            </p>
            
          </div>
        </div>
      </div></div>
</section>

</body>

 <?php $this->load->view('admin/footer');?>