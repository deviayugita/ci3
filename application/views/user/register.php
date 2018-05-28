<?php echo form_open('Tugas/register', array('class'=>'needs_validation','novalidate'=>'')); ?>


 <!-- gallery -->
    <section class="bg-light" id="gallery">
    <div class="row">
    	<div class="col-lg-3"></div>

    	<div class="col-lg-6">

    		<center><h2>Daftar Admin </h2></center>

    	<div class="jumbotron">

      	<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" placeholder="Nama">
			</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" class="form-control" placeholder="alamat e-mail" name="email">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" class="form-control" placeholder="Alamat" name="alamat">
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" placeholder="Username" name="username">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" placeholder="" name="password">
		</div>
		<div class="form-group">
			<label>Tanggal Register</label>
			<input type="date" class="form-control" placeholder="" name="tgl_register">
		</div>

<button type="submit" class="btn btn-primary btn-block">Daftar</button>

		</div>
		
		</div>
		<div class="col-lg-3"></div>
      </div>
    </section>




<?php echo form_close(); ?>