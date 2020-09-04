
<!-- bagian Halaman Utama -->
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="row">
          <div class="col-md px-0 p-3">
            <h1 class="display-4 font-italic"><?php echo $konten[0]['judul'];?></h1>
            <h1 class="display-9 font-italic"><small><?php echo $konten[0]['sub_judul'];?></small></h1>
            <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p> -->
            <p class="lead my-3"><?php echo word_limiter($konten[0]['isi'],40);?></p>
            <p class="lead mb-0"><a href="<?php echo base_url()?>details/index/<?php echo $konten[0]['id']?>/<?php echo $konten[0]['judul'];?>" class="text-white font-weight-bold">Continue reading...</a></p>
          </div>
          <div class="col-md">
            <img class="card-img flex-auto d-none d-md-block img-responsive" src="<?= base_url();?>asset/img/tumb/<?= $konten[0]['gambar'];?>" alt="Card image cap">
          </div>
        </div>
        
      </div>

      <div class="row mb-2">
        <div class="col-md">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Pastor Prespective</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo $prespective[0]['judul_status'];?></a>
              </h3>
          <!--     <div class="mb-1 text-muted"><?php echo $prespective[0]['tanggal'];?></div>
              <p class="card-text mb-auto"><?php echo $prespective[0]['status']; ?></p> -->
              <a href="<?php echo base_url();?>Pastor_prespective">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap" src="<?php echo base_url()?>asset/img/tumb/<?php echo $prespective[0]['gambar'];?>">
          </div>
        </div>
        <div class="col-md">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Koleksi Buku</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo $buku[0]['judul']; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $buku[0]['tanggal']; ?></div>
              <p class="card-text mb-auto"><?php echo $buku[0]['penjelasan']; ?></p>
              <a href="<?php echo $buku[0]['link_download'];?>">Continue Download</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo base_url();?>asset/img/tumb/<?= $buku[0]['cover'];?>" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $konten[1]['judul']; ?></h2>
            <p class="blog-post-meta"><?php echo $konten[1]['tanggal']; ?> by <a href="#"><?php echo $konten[1]['penulis'];?></a></p>

            <p><?php echo nl2br($konten[1]['isi']); ?></p>
           
         
        
            <!-- facebook share -->
            <div data-href="<?php echo base_url().$uri?>" data-size="small" style="display: inline;"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpastorroisipahelut.com%2F<?=$uri?>&amp;src=sdkpreparse" style="color: blue; display: inline;"><i class="fab fa-facebook-square fa-3x"></i></a></div>
            <!-- end facebook -->
             <!-- Whatsapp Share -->
             <a href="whatsapp://send?text=<?php echo base_url().$uri?>" style="color: green; display: inline;"><i class="fab fa-whatsapp-square fa-3x"></i></a>
             <!-- end Whatsapp share -->
            <!-- twitter Share -->
             <a href="https://twitter.com/intent/tweet?url=<?= base_url().$uri;?>" style="color: blue; display: inline;"><i class="fab fa-twitter-square fa-3x"></i></a>
             <!-- end Twitter Share -->
       

          </div><!-- /.blog-post -->

          <!-- =====================Card Deks========================= -->

          <div class="card-deck mb-3">
            <!-- ============= -->
            <div class="card">
              <img src="<?= base_url();?>asset/img/tumb/<?= $konten[2]['gambar'];?>" class="card-img-top" alt="..." height="162px">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="<?php echo base_url()?>details/index/<?php echo $konten[2]['id']?>/<?php echo $konten[2]['judul'];?>" class="text-dark">
                  <?php if (empty($konten[2]['judul'])){
                            echo "Card Title";
                        }else echo $konten[2]['judul'];
                  ?>
                  </a>
                  
                </h5>

                <p class="card-text"><?php if (empty($konten[2]['isi'])){
                            echo "This card has supporting text below as a natural lead-in to additional content.";
                        }else echo word_limiter($konten[2]['isi'],13);
                  ?>
                </p>
                <p class="card-text"><small class="text-muted"><?php echo $konten[2]['tanggal']; ?></small></p>
              </div>
            </div>
            <!-- =============== -->
            <div class="card">
              <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[3]['gambar'];?>" class="card-img-top" alt="..." height="162px">
              <div class="card-body">
                <a href="<?php echo base_url()?>details/index/<?php echo $konten[3]['id']?>/<?php echo $konten[3]['judul'];?>" class="text-dark">
                <h5 class="card-title">
                  <?php if (empty($konten[3]['judul'])){
                            echo "Card Title";
                        }else echo $konten[3]['judul'];
                  ?>
                </h5>
                </a>
                <p class="card-text"><?php if (empty($konten[3]['isi'])){
                            echo "This card has supporting text below as a natural lead-in to additional content.";
                        }else echo word_limiter($konten[3]['isi'],13);
                  ?>
                </p>
                <p class="card-text"><small class="text-muted"><?php echo $konten[3]['tanggal'];?></small></p>
              </div>
            </div>
            <!-- ============= -->
            <div class="card">
              <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[4]['gambar'];?>" class="card-img-top" alt="..." height="162px">
              <div class="card-body">
                <a href="<?php echo base_url()?>details/index/<?php echo $konten[4]['id']?>/<?php echo $konten[4]['judul'];?>" class="text-dark">
                <h5 class="card-title">
                  <?php if (empty($konten[4]['judul'])){
                            echo "Card Title";
                        }else echo $konten[4]['judul'];
                  ?>
                </h5>
                </a>
                <p class="card-text"><?php if (empty($konten[4]['isi'])){
                            echo "This card has supporting text below as a natural lead-in to additional content.";
                        }else echo word_limiter($konten[4]['isi'],13);
                  ?>
                </p>
                <p class="card-text"><small class="text-muted"><?php echo $konten[4]['tanggal']; ?></small></p>
              </div>
            </div>
          </div>

           <div class="card-deck mb-3">
            <!-- =========== -->
            <div class="card">
              <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[5]['gambar'];?>" class="card-img-top" alt="..." height="162px">
              <div class="card-body">
                <a href="<?php echo base_url()?>details/index/<?php echo $konten[5]['id']?>/<?php echo $konten[5]['judul'];?>" class="text-dark">
                 <h5 class="card-title">
                  <?php if (empty($konten[5]['judul'])){
                            echo "Card Title";
                        }else echo $konten[5]['judul'];
                  ?>
                </a>
                </h5>
                 <p class="card-text"><?php if (empty($konten[5]['isi'])){
                            echo "This card has supporting text below as a natural lead-in to additional content.";
                        }else echo word_limiter($konten[5]['isi'],13);
                  ?>
                </p>
                <p class="card-text"><small class="text-muted"><?php echo $konten[5]['tanggal']; ?></small></p>
              </div>
            </div>
            <!-- =============== -->
            <div class="card">
              <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[6]['gambar'];?>" class="card-img-top" alt="..." height="162px">
              <div class="card-body">
                <a href="<?php echo base_url()?>details/index/<?php echo $konten[6]['id']?>/<?php echo $konten[6]['judul'];?>" class="text-dark">
                 <h5 class="card-title">
                  <?php if (empty($konten[6]['judul'])){
                            echo "Card Title";
                        }else echo $konten[6]['judul'];
                  ?>
                 </h5>
                </a>

               <p class="card-text"><?php if (empty($konten[6]['isi'])){
                            echo "This card has supporting text below as a natural lead-in to additional content.";
                        }else echo word_limiter($konten[6]['isi'],13);
                  ?>
                </p>
                <p class="card-text"><small class="text-muted"><?php echo $konten[6]['tanggal']; ?></small></p>
              </div>
            </div>
            <!-- =============== -->
            <div class="card">
              <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[7]['gambar'];?>" class="card-img-top" alt="..." height="162px">
              <div class="card-body">
              <a href="<?php echo base_url()?>details/index/<?php echo $konten[7]['id']?>/<?php echo $konten[7]['judul'];?>" class="text-dark">
               <h5 class="card-title">
                  <?php if (empty($konten[7]['judul'])){
                            echo "Card Title";
                        }else echo $konten[7]['judul'];
                  ?>
                </h5>
              </a>
                <p class="card-text"><?php if (empty($konten[7]['isi'])){
                            echo "This card has supporting text below as a natural lead-in to additional content.";
                        }else echo word_limiter($konten[7]['isi'],13);
                  ?>
                </p>
                <p class="card-text"><small class="text-muted"><?php echo $konten[7]['tanggal']; ?></small></p>
              </div>
            </div>
          </div>
          <div class="border-bottom mb-3" border="1"></div>
          <!-- ====================== end Card Deks====== -->
          <!-- =================== Media Object =============== -->
            <ul class="list-unstyled">
              <li class="media">
                <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[8]['gambar'];?>" class="mr-3" alt="..." height="50px">
                <div class="media-body">
                  <a href="<?php echo base_url()?>details/index/<?php echo $konten[8]['id']?>/<?php echo $konten[8]['judul'];?>" class="text-dark">
                    <h5 class="mt-0 mb-1"> <?php if (empty($konten[8]['judul'])){
                              echo "List-based media object";
                          }else echo $konten[8]['judul'];
                    ?></h5>
                  </a>
                  <?php if (empty($konten[8]['isi'])){
                            echo "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.";
                        }else echo word_limiter($konten[8]['isi'],23);
                  ?>
                </div>
              </li>
              <li class="media my-4">
                <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[9]['gambar'];?>" class="mr-3" alt="..." height="50px">
                <div class="media-body">
                  <a href="<?php echo base_url()?>details/index/<?php echo $konten[9]['id']?>/<?php echo $konten[9]['judul'];?>" class="text-dark">
                     <h5 class="mt-0 mb-1"> <?php if (empty($konten[9]['judul'])){
                              echo "List-based media object";
                          }else echo $konten[9]['judul'];
                    ?></h5>
                  </a>
                  <?php if (empty($konten[9]['isi'])){
                            echo "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.";
                        }else echo word_limiter($konten[9]['isi'],23);
                  ?>
                </div>
              </li>
              <li class="media">
                <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[10]['gambar'];?>" class="mr-3" alt="..." height="50px">
                <div class="media-body">
                  <a href="<?php echo base_url()?>details/index/<?php echo $konten[10]['id']?>/<?php echo $konten[10]['judul'];?>" class="text-dark">
                     <h5 class="mt-0 mb-1"> <?php if (empty($konten[10]['judul'])){
                              echo "List-based media object";
                          }else echo $konten[10]['judul'];
                    ?></h5>
                  </a>
                  <?php if (empty($konten[10]['isi'])){
                            echo "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.";
                        }else echo word_limiter($konten[10]['isi'],23);
                  ?>
                </div>
              </li>
            </ul>

             <ul class="list-unstyled">
              <li class="media">
                <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[11]['gambar'];?>" class="mr-3" alt="..." height="50px">
                <div class="media-body">
                  <a href="<?php echo base_url()?>details/index/<?php echo $konten[11]['id']?>/<?php echo $konten[11]['judul'];?>" class="text-dark">
                      <h5 class="mt-0 mb-1"> <?php if (empty($konten[11]['judul'])){
                              echo "List-based media object";
                          }else echo $konten[11]['judul'];
                    ?></h5>
                  </a>
                  <?php if (empty($konten[11]['isi'])){
                            echo "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.";
                        }else echo word_limiter($konten[11]['isi'],23);
                  ?>
                </div>
              </li>
              <li class="media my-4">
                <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[12]['gambar'];?>" class="mr-3" alt="..." height="50px">
                <div class="media-body">
                  <a href="<?php echo base_url()?>details/index/<?php echo $konten[12]['id']?>/<?php echo $konten[12]['judul'];?>" class="text-dark">
                      <h5 class="mt-0 mb-1"> <?php if (empty($konten[12]['judul'])){
                              echo "List-based media object";
                          }else echo $konten[12]['judul'];
                    ?></h5>
                  </a>

                  <?php if (empty($konten[12]['isi'])){
                            echo "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.";
                        }else echo word_limiter($konten[12]['isi'],23);
                  ?>
                </div>
              </li>
              <li class="media">
                <img src="<?= base_url();?>asset/img/tumb/<?php echo $konten[13]['gambar'];?>" class="mr-3" alt="..." height="50px">
                <div class="media-body">
                  <a href="<?php echo base_url()?>details/index/<?php echo $konten[13]['id']?>/<?php echo $konten[13]['judul'];?>" class="text-dark">
                    <h5 class="mt-0 mb-1"> <?php if (empty($konten[13]['judul'])){
                              echo "List-based media object";
                          }else echo $konten[13]['judul'];
                    ?></h5>
                  </a>
                  <?php if (empty($konten[13]['isi'])){
                            echo "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.";
                        }else echo word_limiter($konten[13]['isi'],23);
                  ?>
                </div>
              </li>
            </ul>

            


          <!-- =================== end Media Object ======================== -->
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
       