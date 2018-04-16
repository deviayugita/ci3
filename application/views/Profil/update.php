<?php $this->load->view('Profil/header');?>
<!-- update -->
<?php 
  echo form_open_multipart('Tugas/update/'.$this->uri->segment(3)) ?>
  <?php echo validation_errors(); ?>
<div class="col-sm-12">
 <h4><small>Update</small></h4>
 <hr>
judul : <input type="text" class="form-control" name="Judul" value="<?php echo $Blog_list['Judul'] ?>"><br>
Author : <input type="text" class="form-control" name="Autor" value="<?php echo $Blog_list['Autor'] ?>"><br>
konten : <textarea name="Konten" class="form-control" style="height:400px;"><?php echo $Blog_list['Konten']?></textarea><br>
image : <input type="file" name="userfile" required=""><br>

<button type="submit" class="btn btn-primary">Update</button>
<a href="<?php echo site_url('Tugas/read') ?>"><button class="btn btn-danger">Cancel</button></a>
                <hr>
<?php
  if(validation_errors()){
    echo "<div class='alert alert-danger'>
        <strong>Danger!</strong>".validation_errors()."
        </div>"
        ;
  }
?>
</div>
<?php $this->load->view('Profil/footer');?>