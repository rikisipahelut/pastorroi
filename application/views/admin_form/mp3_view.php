

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
            <form method="post" action="">

			  <div class="form-group">
			    <label for="judul">Judul mp3</label>
			    <input type="text" name="judul" class="form-control" id="judul" placeholder="Entry Title">
          <small class="form-text text-danger"><?= form_error('judul');?></small>
			  </div>

			  <div class="form-group">
			    <label for="embed">Embed</label>
			    <input type="text" name="embed" class="form-control" id="embed" placeholder="Entry Embed">
          <small class="form-text text-danger"><?= form_error('embed');?></small>
			  </div>

			<button name="submit" type="submit" class="btn btn-primary btn-lg float-md-right mb-5">Kirim</button>





			</form>
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