<?php $this->load->view('admin/header');?>
<!-- update -->
<?php 
  echo form_open_multipart('Admin/update/'.$this->uri->segment(3)) ?>
  <?php echo form_open_multipart('Admin/insert', array('class'=>'needs-validation','novalidate'=>'')); ?>
  <?php echo validation_errors(); ?>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
  <div class="jumbotron">
 <h1><small></small></h1><br>
 <br>
 <h1><strong><center>Update Blog</center></strong></h1>
 <hr>
judul : <input type="text" class="form-control" name="Judul" value="<?php echo $Blog_list['Judul'] ?>"><br>
Author : <input type="text" class="form-control" name="Autor" value="<?php echo $Blog_list['Autor'] ?>"><br>
konten : <textarea name="Konten" class="form-control" style="height:400px;"><?php echo $Blog_list['Konten']?></textarea><br>
image : <input type="file" name="userfile" required=""><br>
<br><br>
<button type="submit" class="btn btn-primary">Update</button>
<a href="<?php echo site_url('Admin/read') ?>"><button class="btn btn-danger">Cancel</button></a>
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
<?php $this->load->view('admin/footer');?>