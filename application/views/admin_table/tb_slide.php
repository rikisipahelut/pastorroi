

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
         
         
          <div class="col-lg-12 table-responsive">
           <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">judul_kegiatan</th>
                  <th scope="col">penjelasan</th>
                  <th scope="col">gambar</th>
                  <th scope="col">tanggal</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($slide as $slides):?>
                <tr>
                  <th scope="row"><?= $slides['id'];?></th>
                  <td><?= $slides['judul_kegiatan'];?></td>
                  <td><?= $slides['penjelasan'];?></td>
                  <td><?= $slides['gambar'];?></td>
                  <td><?= $slides['tanggal'];?></td>
                  <td><a href="<?php echo base_url();?>Admin/hapus_slide/<?php echo $slides['id'];?>" onclick="return confirm('anda yakin hapus')" >Hapus</a></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
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