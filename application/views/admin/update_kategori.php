<?php $this->load->view('admin/header');?>
<!-- update -->
<?php 
  echo form_open_multipart('Admin/update_kategori/'.$this->uri->segment(3)) ?>
  <?php echo form_open_multipart('Admin/insert_kategori', array('class'=>'needs-validation','novalidate'=>'')); ?>
  <?php echo validation_errors(); ?>


  <div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
<div class="col-sm-8">
  <div class="jumbotron"> 
 <h1><small></small></h1><br>
 <br>
 <h1><strong><center>Update Kategori</center></strong></h1>
 <hr>
nama : <input type="text" class="form-control" name="nama" value="<?php echo $Kategori['nama'] ?>"><br>
deskripsi : <textarea name="deskripsi" class="form-control" style="height:400px;"><?php echo $Kategori['deskripsi']?></textarea><br>
<br>

<button type="submit" class="btn btn-primary">Update</button>
<a href="<?php echo site_url('Admin/read_kategori') ?>"><button class="btn btn-danger">Cancel</button></a>
                <hr>
<?php
  if(validation_errors()){
    echo "<div class='alert alert-danger'>
        <strong>Danger!</strong>".validation_errors()."
        </div>"
        ;
  }
?>
</div></div>
<div class="col-sm-2"></div>
</div>
</div>
<?php $this->load->view('admin/footer');?>