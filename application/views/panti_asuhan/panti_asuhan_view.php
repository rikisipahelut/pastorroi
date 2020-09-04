<!-- bagian Halaman Utama -->

      <!-- <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Panti Asuhan Penuai Indonesia</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div> -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url();?>asset/img/tumb/<?= $kegiatan[0]['gambar'];?>"  data-src="holder.js/200x250?theme=thumb" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $kegiatan[0]['judul_kegiatan'];?></h5>
              <p><?= $kegiatan[0]['penjelasan'];?></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>asset/img/tumb/<?= $kegiatan[1]['gambar'];?>"  data-src="holder.js/200x250?theme=thumb" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $kegiatan[1]['judul_kegiatan'];?></h5>
              <p><?= $kegiatan[1]['penjelasan'];?></p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>asset/img/tumb/<?= $kegiatan[2]['gambar'];?>"  data-src="holder.js/200x250?theme=thumb" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $kegiatan[2]['judul_kegiatan'];?></h5>
              <p><?= $kegiatan[2]['penjelasan'];?></p>
            </div>
          </div>
         
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- ==================== Batas Carousel ====================== -->
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
          <!--  -->
          </h3>
          <div class="row">
            <div class="col">
              <h3 class="text-center text-muted">Panti Asuhan Penuai Indonesia</h3>
            </div>
          </div>
          <div class="row">
            <a href="<?php echo base_url('Panti_asuhan/dokumen')?>" class="btn btn-success mx-auto font-weight-bold">DOKUMEN</a>

          </div>
          <div class="row p-5">
            <div class="col-md-4 cen">
              <div class="blog-post">

                 <div class="card rounded-circle border-0 text-center" style="width: 18rem;">
                    <!-- <img class="card-img-top rounded-circle" src="<?php echo base_url();?>asset/img/tumb/1.jpg" alt="Card image cap"> -->
                    <a href=""><i class="fas fa-mountain fa-10x"></i></a>
                    <div class="card-body">
                      <h5 class="card-title">Visi Dan Misi</h5>
                      <p class="card-text">Mengurangi angka anak putus sekolah serta membina dan menyantuni anak-anak kurang mampu</p>
                      <a href="<?php echo base_url();?>Panti_asuhan/visi" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div><!-- /.blog-post -->
         
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                 <div class="card center rounded-circle border-0 text-center" style="width: 18rem;">
                    <!-- <img class="card-img-top rounded-circle" src="<?php echo base_url();?>asset/img/tumb/1.jpg" alt="Card image cap"> -->
                   <a href=""><i class="fas fa-calculator fa-10x"></i></a>
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Anak</h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                      <a href="<?php echo base_url();?>Panti_asuhan/jum_anak" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div><!-- /.blog-post -->
         
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                 <div class="card rounded-circle border-0 text-center" style="width: 18rem;">
                    <!-- <img class="card-img-top rounded-circle" src="<?php echo base_url();?>asset/img/tumb/1.jpg" alt="Card image cap"> -->
                    <a href=""><i class="fas fa-chalkboard-teacher fa-10x"></i></a>
                    <div class="card-body">
                      <h5 class="card-title">Program</h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                      <a href="<?php echo base_url();?>Panti_asuhan/Program" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div><!-- /.blog-post -->
         
            </div>
          </div>
           <div class="row mb-4">
            <div class="col-md-12">
              <div class="card">
          <h5 class="card-header">Alamat</h5>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title">Panti Asuhan Penuai Indonesia <span class="text-muted">Cabang Negara-Bali</span></h5>
                 <h6 class="card-title">Devisi Anak <span class="text-muted">LKSA/PSAA PENUAI</span></h6>
                <p class="card-text">Jl.Pulau Bali <br><small>No.7 Dauhwaruh 82217 Negara-Bali ( Belakang Clandys )</small> </p>
                <p>telpon 0859-6115-7282</p>
                <a href="https://www.google.com/maps/place/GBI+KAPERNAUM+NEGARA/@-8.3629362,114.6398189,19z/data=!4m5!3m4!1s0x2dd1620a55b75615:0x38af4984d3c69fa4!8m2!3d-8.3632361!4d114.6399342" class="btn btn-primary" target="_blank">Go To Map</a>
              </div>

              <div class="col-md-2 text-center">
                <h5 class="card-title"><span class="text-muted">Instagram</span></h5>
                <a href="https://www.instagram.com/penuai_christian_orphanage/" target="_blank"><i class="fab fa-instagram fa-10x" ></i></a>
              </div>

              <div class="col-md-2 text-center">

                <h5 class="card-title"><span class="text-muted">Facebook</span></h5>
                <a href="https://www.facebook.com/lksaypi.cabbali.7" target="_blank" ><i class="fab fa-facebook fa-10x"></i></a>
                
              </div>

              <div class="col-md-2 text-center">
                <h5 class="card-title"><span class="text-muted">Whatsapp</span></h5>
                <a href="https://api.whatsapp.com/send?phone=+6285961157282" target="_blank"><i class="fab fa-whatsapp fa-10x"></i></a>
              </div>
            </div>
            
          </div>
        </div>
            </div>
          </div>
                  

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->


      </div><!-- /.row -->

    </main><!-- /.container -->
