<!-- bagian Halaman Utama -->

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Pastor Prespective</h1>
          <p class="lead my-3">Setiap orang memmiliki pandangan yang berbeda akan sebuah permasalahan,tergatung dari sudut pandang mana kita melihat hal tersebut. </p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Apa Pandanganmu ?..</a></p>
        </div>
      </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
           <!--  From the Firehose -->
          </h3>

          <div class="blog-post">
               <h5>Perspective Today's</h5>
               <!-- <p><small class="blockquote-footer">December 23, 2013 by Pastor Roi</small></p> -->
               <p class="card-text"><small class="text-muted"><?php echo $prespective[0]['tanggal']; ?></small></p>
               <div class="card">
                <!-- ============================= -->
               <div class="card-header">
                  <?php echo $prespective[0]['judul_status']; ?>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p><?php echo $prespective[0]['status'] ?></p>
                    <footer class="blockquote-footer"><cite title="Source Title">Pastor Roi Sipahelut</cite></footer>
                  </blockquote>
                </div>
                <a href="<?= base_url('Details_pastor_prespective/index/').$prespective[0]['id'];?>/<?= $prespective[0]['judul_status'];?>" class ="btn btn-primary"><b>Continue</b></a>
              </div>
          </div><!-- /.blog-post -->
          <div class="blog-post">
               <h5>Perspective Yesterday</h5>
               <!-- <p><small class="blockquote-footer">December 23, 2013 by Pastor Roi</small></p> -->
               <p class="card-text"><small class="text-muted"><?php echo $prespective[1]['tanggal']; ?></small></p>
               <div class="card">
                <!-- ============================= -->
               <div class="card-header">
                  <?php echo $prespective[1]['judul_status']; ?>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p><?php echo $prespective[1]['status'];?></p>
                    <footer class="blockquote-footer"><cite title="Source Title">Pastor Roi Sipahelut</cite></footer>
                  </blockquote>
                </div>
                <a href="<?= base_url('Details_pastor_prespective/index/').$prespective[1]['id'];?>/<?= $prespective[1]['judul_status'];?>" class ="btn btn-primary"><b>Continue</b></a>
              </div>
          </div><!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
       