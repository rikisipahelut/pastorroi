<!-- bagian Halaman Utama -->
<!-- <?php var_dump($buku);?> -->
      <div class="jumbotron p-3 text-white rounded bg-dark">
        <!-- <h4 class="display-6 font-italic">Perpustakaan Digital</h4> -->
        <h3>Perpustakaan Digital <span class="badge badge-secondary">New</span></h3>
        <div class="row">
           <div class="col-md-4 px-0 p-3">
              <div class="card mb-3 bg-dark border-0" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="<?= base_url();?>asset/img/tumb/<?php echo $buku[0]['cover'];?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                   <a href="<?php echo $buku[0]['link_download'];?>" class="text-white"><h5 class="card-title">Buku <?php echo $buku[0]['judul'];?></h5></a>
                   <p class="card-text"><?php echo $buku[0]['penjelasan'];?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $buku[0]['tanggal'];?></small></p>
                  </div>
                </div>
              </div>
            </div>
           </div>

           <div class="col-md-4 px-0 p-3">
              <div class="card mb-3 bg-dark border-0" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="<?= base_url();?>asset/img/tumb/<?php echo $buku[1]['cover'];?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <a href="<?php echo $buku[1]['link_download'];?>" class="text-white"><h5 class="card-title">Buku <?php echo $buku[1]['judul'];?></h5></a>
                    <p class="card-text"><?php echo $buku[1]['penjelasan']; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $buku[1]['tanggal']; ?></small></p>
                  </div>
                </div>
              </div>
            </div>
           </div>

            <div class="col-md-4 px-0 p-3">
              <div class="card mb-3 bg-dark border-0" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="<?= base_url();?>asset/img/tumb/<?php echo $buku[2]['cover'] ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <a href="<?php echo $buku[2]['link_download'];?>" class="text-white"><h5 class="card-title">Buku <?php echo $buku[2]['judul'];?></h5></a>
                    <p class="card-text"><?php echo $buku[2]['penjelasan'];?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $buku[2]['tanggal']; ?></small></p>
                  </div>
                </div>
              </div>
            </div>
           </div>

        </div>
      </div>

     
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Kumpulan Buku
          </h3>

          <div class="blog-post">
           <table class="table">
            <div class="row mb-4">
              <div class="col-md-10">
                <form action="" method="post">
                    <input type="search" class="form-control" placeholder="cari buku" name="keyword2">
                  </div>
                  <div class="col-md-2">
                    <button type="submit" name="submit"class="btn btn-default" width="100px">cari</button>
                  </div>
                </form>
            </div>
            
            
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Cover</th>
                <th scope="col">Judul</th>
                <th scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              <?php if (isset($_POST['keyword2'])){?>
                  <?php $i=1; ?>
                  <?php foreach ($cari as $books):?>
                  <tr>
                    <!-- <th scope="row"><?= $books['id'];?></th> -->
                    <th scope="row"><?= $i++;?></th>
                    <td><img src="<?= base_url('asset/img/tumb/').$books['cover'];?>" alt="" width="100px"></td>
                    <td><?= $books['judul'];?></td>
                    <td><a href="<?= $books['link_download'];?>">Download</a></td>
                  </tr>
                  <?php endforeach;?>
              
              <?php }else{?>

                  <?php $i=1; ?>
                  <?php foreach ($buku as $books):?>
                  <tr>
                    <!-- <th scope="row"><?= $books['id'];?></th> -->
                    <th scope="row"><?= $i++;?></th>
                    <td><img src="<?= base_url('asset/img/tumb/').$books['cover'];?>" alt="" width="100px"></td>
                    <td><?= $books['judul'];?></td>
                    <td><a href="<?= $books['link_download'];?>">Download</a></td>
                  </tr>
                  <?php endforeach;?>
              <?php }; ?>
            </tbody>
          </table>
                 

           
          </div><!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
