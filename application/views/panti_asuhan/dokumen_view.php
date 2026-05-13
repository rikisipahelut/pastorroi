<!-- bagian Halaman Utama -->

      <!-- <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Panti Batu Penjuru</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div> -->
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
          <!--  -->
          </h3>
          <div class="row">
            <div class="col">
              <h3 class="text-center text-dark">Dokumen</h3>
            </div>
          </div>
          <div class="row p-1">
            <div class="col-md-12 cen">
              <div class="blog-post">

                <div class="col-lg-12 table-responsive">
                   <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama File</th>
                          <th scope="col">Link</th>
                         <!--  <th scope="col">tanggal</th> -->

                        </tr>
                      </thead>
                      <tbody>
                      	<?php $i=1; ?>
                        <?php foreach ($dokumen as $dokumens):?>
                        <tr>
                          <th scope="row"><?= $i++;?></th>
                          <td><?= $dokumens['nama_file'];?></td>
                          <td><a href="<?= $dokumens['link'];?>">Download</a></td>
                          <!-- <td><?= $dokumens['tanggal'];?></td> -->
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
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
                 <h5 class="card-title">Panti Asuhan Batu Penjuru Bali <span class="text-muted">| Kota Negara-Jembrana</span></h5>
                 <h6 class="card-title">Devisi Anak <span class="text-muted">LKSA/PSAA BATU PENJURU BALI</span></h6>
			<hr>
		<h6 class="card-title">Children's Devision <span class="text-muted">BATU PENJURU BALI ORPHANAGE</span></h6>
                <p class="card-text">Address : Jl.Pulau Bali <br><small>No.7 Dauhwaruh 82217 Negara-Bali ( Belakang Clandys )</small> </p>
                <p><i class="fas fa-phone-alt"></i> <b>Telpon/Whatsapp : <a href="https://api.whatsapp.com/send?phone=+6285961157282" target="_blank" class="text-decoration-none text-dark">0859-6115-7282</a></b></p>
                <a href="https://goo.gl/maps/duYUZvK4meLWXTSp9" class="btn btn-primary" target="_blank"><i class="fas fa-map-pin"></i> Go To Map</a>
              </div>

             <div class="col-md-2 text-center">
                <h5 class="card-title"><span class="text-muted">Instagram</span></h5>
                <a href="https://www.instagram.com/batupenjuru_orphanage/" target="_blank" class="text-danger"><i class="fab fa-instagram fa-10x" ></i></a>
              </div>

              <div class="col-md-2 text-center">

                <h5 class="card-title"><span class="text-muted">Facebook</span></h5>
                <a href="https://www.facebook.com/lksaypi.cabbali.7" target="_blank" ><i class="fab fa-facebook fa-10x"></i></a>
                
              </div>

              <div class="col-md-2 text-center">
                <h5 class="card-title"><span class="text-muted">Whatsapp</span></h5>
                <a href="https://api.whatsapp.com/send?phone=+6285961157282" target="_blank" class="text-success"><i class="fab fa-whatsapp fa-10x"></i></a>
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
