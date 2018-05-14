<?php $this->load->view('admin/header');?>    
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
            <?php echo form_open_multipart('Admin/insert', array('class'=>'needs-validation','novalidate'=>'')); ?>
            <?php echo validation_errors(); ?>
            <div class="form-group">
              <p>
                <input type="text" class="form-control ins" name="judul" placeholder="Judul" value="<?php echo set_value('judul')?>"></p>
                <p class="help-block text-danger"></p>
              <p>
                <input type="date" class="form-control ins" name="tanggal" placeholder="Tanggal" value="<?php echo set_value('tanggal')?>"></p>
                <p class="help-block text-danger"></p>
              <p>
                <input type="text" class="form-control ins" name="autor" placeholder="Autor" value="<?php echo set_value('autor')?>"></p>
                <p class="help-block text-danger"></p>

              <div class="form-group">
               <label>Kategori</label>
               <select name="id_kategori" class="form-control">
                  <option value="empty" hidden="">Piih Kategori</option>
                  <?php
                  foreach ($kategori->result() as $data) {
                    echo "<option value='$data->id_kategori'".set_select('id_kategori',$data->id_kategori).">$data->nama</option>";
                  }
                  ?>
                </select>
              </div>

              <p>
                <textarea type="text" class="form-control ins" name="konten" value="<?php echo set_value('konten')?>"></textarea><br>
              </p>
              
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

<?php $this->load->view('admin/footer');?>
