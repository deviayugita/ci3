<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Basic DataTables</h1>
			
		</div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th> 
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Autor</th>
                            <th>Konten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blog->result() as $key) { ?>
                            <tr>
                                <td><?= $key->id ?></td>
                                <td><?= $key->Judul ?></td>
                                <td><?= $key->Tanggal ?></td>
                                <td><?= $key->Autor ?></td>
                                <td><?= $key->Konten ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
<script>
    jQuery(document).ready(function(){
        $('#dt-basic').DataTable();
    });
</script>