

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
                  <th scope="col">Judul</th>
                  <th scope="col">Sub Judul</th>
                  <th scope="col">isi</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Penulis</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($konten as $kontens):?>
                <tr>
                  <th scope="row"><?= $kontens['id']?></th>
                  <td><?= $kontens['judul']?></td>
                  <td><?= $kontens['sub_judul']?></td>
                  <td><?= word_limiter($kontens['isi'],20)?></td>
                  <td><?= $kontens['gambar']?></td>
                  <td><?= $kontens['tanggal']?></td>
                  <td><?= $kontens['penulis']?></td>
                  <td><a href="<?= base_url();?>Admin/ubah_artikel/<?= $kontens['id'];?>">Edit</a> | <a href="<?= base_url();?>Admin/hapus/<?= $kontens['id'];?>" onclick="return confirm('Anda Yakin Hapus')">Hapus</a></td>
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