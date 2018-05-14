<?php $this->load->view('user/HeaderHome');?>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To My Blog!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#Home">Contact Us</a>
        </div>
      </div>
    </header>

    <!-- Home -->
    <section id="Home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Home</h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <!-- <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
            </span>
            <h4 class="service-heading">Perguruan Tinggi</h4>
            <p class="text-muted">Politekhnik Negeri Malang, jalan Soekarno Hatta, Malang, Jawa Timur, Indonesia </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Program Studi</h4>
            <p class="text-muted">Program studi Manajeman Informatika, jurusan Teknologi Informasi</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <!-- <i class="fa fa-lock fa-stack-1x fa-inverse"></i> -->
            </span>
            <h4 class="service-heading">Hobbi</h4>
            <p class="text-muted">Desain foto menjadi seni digital berupa gambar vektor</p>
          </div>
        </div>
      </div>
    </section>

<?php $this->load->view('user/Footer');?>