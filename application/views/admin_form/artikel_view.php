

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
            <!-- <form method="post"  action="" > -->
              <?php echo form_open_multipart('Admin/artikel'); ?>
              <!-- enctype="multipart/form-data" -->

			  <div class="form-group">
			    <label for="judulArtikel" >Judul</label>
			    <input type="text" class="form-control" id="judulArtikel" name="judul" placeholder="Entry Title">
          <small class="form-text text-danger"><?= form_error('judul');?></small>
			  </div>

			  <div class="form-group">
			    <label for="subJudul">Sub Judul</label>
			    <input type="text" name="sub_judul" class="form-control" id="subJudul" placeholder="Optional">
			  </div>

			  <div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Isi Artikel</span>
				  </div>
				  <textarea class="form-control" name="isi" aria-label="With textarea" rows="10"></textarea>
			  </div>
        <small class="form-text text-danger"><?= form_error('isi');?></small>

			  <div class="form-group">
			    <label for="Penulis">Penulis</label>
			    <input type="text" name="penulis" class="form-control" id="Penulis" placeholder="Anonymus">
          <small class="form-text text-danger"><?= form_error('penulis');?></small>
			  </div>


			 <div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
			  </div>
			  <div class="custom-file">
			    <input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
			    <label class="custom-file-label" for="inputGroupFile01">Choose file/image</label>      
        </div>
			</div>
      <small class="form-text text-danger"><?= form_error("gambar");?></small>
			
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