

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
              
            <form action="<?= base_url()?>Admin/ubah_dokumen/<?= $dokumen['id'];?>" method="post">

			  <div class="form-group">
			    <label for="nama_file">Nama File</label>
			    <input type="text" value="<?= $dokumen['nama_file'];?>" name="nama_file" class="form-control" id="nama_file" placeholder="Entry Title">
           <small class="form-text text-danger"><?= form_error('nama_file');?></small>
			  </div>

        <div class="form-group">
          <label for="link">Link</label>
          <input type="text" name="link"  value="<?= $dokumen['link'];?>" class="form-control" id="link" placeholder="http://">
           <small class="form-text text-danger"><?= form_error('link');?></small>
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