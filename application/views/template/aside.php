 <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded text-center">
            <h4 class="font-italic"><a href="#" class="text-dark ">About Ps.Roi</a></h4>
            <div class="row">
              <div class="col-md mb-2">
                <img src="<?php echo base_url();?>asset/img/tumb/<?= $about['gambar'];?>" alt="About" class="img-rounded" width="150px" height="150px">
              </div>
              <div class="col-md">
                <p class="mb-0 text-justify text-wrap"><?= $about["about"];?></p>
              </div>
            </div>

          </div>
          <!-- =========== youtube =================== -->
           <div class="p-3 text-center">
            <i><small class="text-muted"><?php echo $vidio[0]['tanggal'];?></small></i>
            <div class="embed-responsive embed-responsive-16by9">

              <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QnqlVe5VJE8" allowfullscreen></iframe> -->
              <?php echo htmlspecialchars_decode($vidio[0]['embed']);?>
            </div>
           <!--  <iframe width="853" height="480" src="https://www.youtube.com/embed/QnqlVe5VJE8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          </div>
          <!-- =========== End Youtube ===================================== -->

          <!-- =========== Anchor ( podcash ) ===================================== -->
          <div class="p-3 text-center">
             <i><small class="text-muted"><?php echo $mp3[0]['tanggal'];?></small></i>
             <div class="embed-responsive embed-responsive-16by9">
             <!--  <iframe src="https://anchor.fm/Pselroisipahelut/embed/episodes/RENCANA-JAHAT-YANG-DIGAGALKAN-ALALH-e529mn/a-ale2na" height="102px" width="400px" frameborder="0" scrolling="no"></iframe> -->

             <?php echo htmlspecialchars_decode($mp3[0]['embed']);?>

            
            </div>
          </div>
          <!-- ============ End Achor =================== -->

          <div class="p-3">
            <h4 class="font-italic">Archive</h4>
            
              <div class="btn-group dropright">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Tahunan
                </button>
                <div class="dropdown-menu">
                  <ol class="list-unstyled mb-0 p-3">
                    <li><a href="#">March 2019</a></li>
                    <li><a href="#">February 2019</a></li>
                    <li><a href="#">January 2019</a></li>
                    <li><a href="#">December 2020</a></li>
                    <li><a href="#">November 2020</a></li>
                    <li><a href="#">October 2020</a></li>
                    <li><a href="#">September 2020</a></li>
                    <li><a href="#">August 2020</a></li>
                    <li><a href="#">July 2020</a></li>
                    <li><a href="#">June 2020</a></li>
                    <li><a href="#">May 2020</a></li>
                    <li><a href="#">April 2020</a></li>
                  </ol>
                </div>
              </div>
              
          </div>
         

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">

              <li><a href="https://www.facebook.com/PowerStatement" target="_blank"><i class="fab fa-facebook-square"> Facebook</i></a></li>
              <li><a href="#"><i class="fab fa-twitter"> Twitter</i></a></li>
              <li><a href="https://www.youtube.com/channel/UCqkIdFZlEZo2B7Cs6aHvrTA"  target="_blank"><i class="fab fa-youtube"> Youtube</i></a></li>
              <li><a href="https://www.instagram.com/sipahelut777/" target="_blank"><i class="fab fa-instagram"> Instagram</i></a></li>
              <li><a href="https://anchor.fm/Pselroisipahelut/" target="_blank"><i class="fas fa-podcast"> Anchor</i></a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Other Article</h4>
           
            <ol class="list-unstyled text-justify">
              
              <?php for($i=15;$i<35;$i++):?>
                <?php if (!empty($aside[$i])):?>
                   <li><a href="<?php echo base_url();?>details/index/<?= $aside[$i]['id']?>/<?=$aside[$i]['judul'];?>"><?php echo $aside[$i]['judul'];?></a>
                  </li>
                <?php endif;?>
              <?php endfor;?>
            </ol>
          </div>

          <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
               <h4 class="font-italic border-top">Information Board</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url();?>asset/img/tumb/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url();?>asset/img/tumb/2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url();?>asset/img/tumb/3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <button type="button" class="btn btn-primary btn-lg btn-block">
            Visitor <span class="badge badge-light"><?= $visitor['hari'];?></span>
            <span class="sr-only">unread messages</span>
          </button>


        </aside><!-- /.blog-sidebar -->

