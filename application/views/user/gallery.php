<?php $this->load->view('user/HeaderHome');?>

    <!-- gallery -->
    <section class="bg-light" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Gallery</h2>
            <h3 class="section-subheading text-muted">foto ini saya ambil dari beberapa tempat.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
              <img class="mx-auto rounded-circle" src="http://localhost:8080/ci3/assets/img/portfolio/02-thumbnail.jpg" width="80%" height="100%" alt="">
          </div>
          
          <div class="col-md-4 col-sm-6 portfolio-item">
              <img class="mx-auto rounded-circle" src="http://localhost:8080/ci3/assets/img/portfolio/04-thumbnail.jpg" width="80%" height=100%"  alt="">
          </div>
          
          <div class="col-md-4 col-sm-6 text-center">
              <img class="mx-auto rounded-circle" src="http://localhost:8080/ci3/assets/img/portfolio/05-thumbnail.jpg" width="80%" height="100%"  alt="">
          </div>
        </div>
      </div>
    </section>
<?php $this->load->view('user/Footer');?>