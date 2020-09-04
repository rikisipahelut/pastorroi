

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
                  <th scope="col">Embed</th>
                  <th scope="col">tanggal</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($embed as $embeds):?>
                <tr>
                  <th scope="row"><?= $embeds['id'];?></th>
                  <td><?= $embeds['judul_vidio'];?></td>
                  <td><?= htmlspecialchars($embeds['embed']);?></td>
                  <td><?= $embeds['tanggal'];?>k</td>
                  <td><a href="<?php echo base_url();?>Admin/ubah_vidio/<?php echo $embeds['id'];?>">Edit</a> | <a href="<?php echo base_url();?>Admin/hapus_vidio/<?= $embeds['id'];?>" onclick="return confirm('anda yakin hapus')">Hapus</a></td>
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