<!DOCTYPE html>
<html lang="en">

  <head>
    <style>
.blog {
    border: none;
    cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: black;
}
.dropdown-child a {
    /*color: white;*/
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
.hii{
  background-color: #212529;
}
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <font face="Back to Black Bold Demo Regular"><title>Devi Ayu Gita</title></font>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost:8080/ci3/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="http://localhost:8080/ci3/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="http://localhost:8080/ci3/assets/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container hii">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Devi Ayu Gita</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto" >


            <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/index/')?>">Home</a></li>
            <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/about/')?>">About</a></li>
            <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/contact/')?>">Contact</a></li>
            <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/gallery/')?>">Gallery</a></li>
            <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/read/')?>">Blog</a></li>

          </ul>
        </div>
 

    <?php if ($this->session->flashdata('admin_registered')): ?>
  <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('admin_registered').'</div>'; ?>
<?php endif; ?>

  
  <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
<?php endif; ?>

  <?php if($this->session->flashdata('admin_loggedout')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('admin_loggedout').'</p>'; ?>
<?php endif; ?>




<!-- ============================================ -->
<?php if(!$this->session->userdata('logged_in')): ?>

  <div class="btn-group" role="group" aria-label="Data baru">
    <?php echo anchor('Tugas/register','Register',array('class'=>'btn btn-outline-light')); ?>
    <?php echo anchor('Tugas/login','Login',array('class'=>'btn btn-outline-light')); ?>
  </div>

<?php endif; ?>

<!-- ======================================================= -->
 <?php if($this->session->userdata('logged_in')): ?>

  <div class="btn-group" role="group" aria-label="Data baru">

    <?php echo enchor('Tugas/insert','Blog baru',array('class'=>'btn btn-outline-light')); ?>
    <?php echo anchor('Tugas/insertKategori','Kategori baru',array('class'=>'btn btn-outline-light')); ?>
    <?php echo anchor('Tugas/logout','Logout',array('class'=>'btn btn-outline-light')); ?>

  </div>

<?php endif; ?>

     </div>
    </nav>
