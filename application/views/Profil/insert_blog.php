<?php $this->load->view('Profil/header');?>    
<!-- insert -->
    <section class="bg-light" id="insert">
      <div class="container">
          
        </div>
        <div class="row">
          <div class="col-lg-3"></div>
         
          <div class="col-lg-6">
            <div class="jumbotron">
            <center><h2 class="section-heading text-uppercase"><font face="One Stroke Script LET">Insert</font></h2>
            <font class="section-subheading text-muted">Insert Blog Baru</font></center>
            <br>
            <?php echo form_open_multipart('Tugas/insert'); ?>
            <?php echo validation_errors(); ?>
            <div class="form-group">
              <p>
                <input type="text" class="form-control ins" name="judul" placeholder="Judul" required data-validation-required-message="Please enter title."></p>
                <p class="help-block text-danger"></p>
              <p>
                <input type="date" class="form-control ins" name="tanggal" placeholder="Tanggal" required data-validation-required-message="Please enter date."></p>
                <p class="help-block text-danger"></p>
              <p>
                <input type="text" class="form-control ins" name="autor" placeholder="Autor" required data-validation-required-message="Please enter Autor."></p>
                <p class="help-block text-danger"></p>
              <textarea type="text" class="form-control ins" name="konten" placeholder="Konten"></textarea><br>
              <p>
                <input type="file" class="form-control ins" name="userfile" placeholder="Foto"></p>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-primary">Reset</button>
          </div>
            <?php echo form_close(); ?>
             <!-- </form> -->
          </div>
        </div>

          <div class=col-lg-3""></div>

        </div>
      </div>
    </section>

<?php $this->load->view('Profil/footer');?>
