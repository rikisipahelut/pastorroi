

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $page;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active"><?php echo $page;?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
         
          <div class="col-lg-8">
               <?php echo form_open_multipart('Admin/buku'); ?>
            <!-- <form action="" method="post"> -->

			  <div class="form-group">
			    <label for="judul">Judul Buku</label>
			    <input type="text" name="judul" class="form-control" id="judul" placeholder="Entry Title">
           <small class="form-text text-danger"><?= form_error('judul');?></small>
			  </div>
        <div class="form-group">
          <label for="penjelasan">Penjelasan Singkat</label>
          <input type="text" name="penjelasan" class="form-control" id="judul" placeholder="Max 100 Char">
           <small class="form-text text-danger"><?= form_error('judul');?></small>
        </div>

			  <div class="form-group">
			    <label for="penulis">Penulis Buku</label>
			    <input type="text" name="penulis" class="form-control" id="Penulis" placeholder="Anonymus" value="Anonymus">
           <small class="form-text text-danger"><?= form_error('penulis');?></small>
			  </div>
        <div class="form-group">
          <label for="link">Link</label>
          <input type="text" name="link" class="form-control" id="link" placeholder="http://">
           <small class="form-text text-danger"><?= form_error('link');?></small>
        </div>


			 <div class="input-group mb-3">
			  <div class="custom-file">
			    <input type="file" name="gambar">
			  </div>
			</div>
       <small class="form-text text-danger"><?= form_error('gambar');?></small>
			
			<button name="submit" type="submit" class="btn btn-primary btn-lg float-md-right mb-5">Kirim</button>




  <?php echo form_close();?>
			<!-- </form> -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->