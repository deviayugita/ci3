
    <section class="bg-light" id="gallery">
    <div class="row">
    	<div class="col-lg-4"></div>

    	<div class="col-lg-4">
    		<?php echo form_open('Login/login'); ?>



    	<div class="jumbotron">

      	<h1 class="text-center"><?php echo $page_title; ?></h1>
		<div class="form-group">
			<input type="tex" name="username" class="form-control" placeholder="Masukan username" required autofocus>
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="masukan password" required>
		</div>
		<button type="submit" class="btn btn-primary btn-block">Login</button>
		
		<a class="btn btn-primary btn-block" href="<?php echo site_url('Login/register/')?>">Daftar</a>
		</div>


			<?php echo form_close(); ?>
		</div>
		<div class="col-lg-4"></div>
      </div>
    </section>







