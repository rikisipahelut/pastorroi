

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
        <!-- <form method="post" action=""> -->
        <?php echo form_open_multipart('Admin/about'); ?>

			  <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">About</span>
          </div>
          <textarea class="form-control" name="about" aria-label="With textarea" rows="5"><?php echo $about['about']; ?></textarea>
        </div>
        <small class="form-text text-danger"><?= form_error('isi');?></small>


			  <div class="form-group">
			    <input type="file" name="gambar" value="<?php echo $about['gambar'];?>">
          <small class="form-text text-danger"><?= form_error('gambar');?></small>
			  </div>

			<button name="submit" type="submit" class="btn btn-primary btn-lg float-md-right mb-5">ubah</button>




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