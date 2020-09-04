<!-- bagian Halaman Utama -->

      <!-- <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="802" height="441" src="https://www.youtube.com/embed/ZHqBliTASdI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div> -->
    <div class="jumbotron p-3 p-md-3 text-white rounded bg-light">

      <div class="row mb-2">

        <div class="col-md-12 p-2">
          <div class="embed-responsive embed-responsive-16by9">
            <?php if(empty($vidio[0])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[0]['embed']);
                         }?>
           <!--  <iframe width="802" height="441" src="https://www.youtube.com/embed/ZHqBliTASdI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>
    </div>
   

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-1 font-italic border-bottom">
            <!-- From the Firehose -->
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title mb-4">Vidio Pengajaran</h2>
            <!-- ==========card================= -->
            <div class="card-group">
                <div class="card">
                  <div class="embed-responsive embed-responsive-16by9">
                   <?php if(empty($vidio[1])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[1]['embed']);
                         }?>
                    <!-- <iframe width="802" height="441" src="https://www.youtube.com/embed/S5yXskL2iyY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo  htmlspecialchars_decode($vidio[1]['judul_vidio']); ?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php echo $vidio[1]['tanggal'];?></small>
                  </div>
                </div>
                <div class="card">
                  <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[2])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[2]['embed']);
                         }?>
                 <!--   <iframe width="802" height="441" src="https://www.youtube.com/embed/OKS90r4XE94" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php if(empty($vidio[2])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[2]['judul_vidio']);
                         }?>
                      
                    </h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[2])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[2]['tanggal']);
                         }?></small>
                  </div>
                </div>
                <div class="card">
                 <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[3])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[3]['embed']);
                         }?>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php if(empty($vidio[3])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[3]['judul_vidio']);
                         }?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[3])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[3]['tanggal']);
                         }?></small>
                  </div>
                </div>
              </div>
              <!-- =================================================== -->
                <h1 class="text-center ">
                  <a href="https://www.youtube.com/user/SIPAHELUT1978" class="text-danger"><i class="fab fa-youtube fa-1x">Go to my chanel</i></a>
                </h1>
              <!-- =================================================== -->
              <div class="card-group">
                <div class="card">
                 <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[4])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[4]['embed']);
                         }?>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php if(empty($vidio[4])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[4]['judul_vidio']);
                         }?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[4])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[4]['tanggal']);
                         }?></small>
                  </div>
                </div>
                <div class="card">
                 <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[5])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[5]['embed']);
                         }?>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php if(empty($vidio[5])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[5]['judul_vidio']);
                         }?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[5])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[5]['tanggal']);
                         }?></small>
                  </div>
                </div>
                <div class="card">
                 <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[6])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[6]['embed']);
                         }?>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php if(empty($vidio[6])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[6]['judul_vidio']);
                         }?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[6])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[6]['tanggal']);
                         }?></small>
                  </div>
                </div>
              </div>
              <!-- ========================================================== -->

              <!-- =================================================== -->
               <div class="card-group">
                <div class="card">
                 <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[7])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[7]['embed']);
                         }?>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php if(empty($vidio[7])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[7]['judul_vidio']);
                         }?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[7])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[7]['tanggal']);
                         }?></small>
                  </div>
                </div>
                <div class="card">
                 <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[8])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[8]['embed']);
                         }?>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php if(empty($vidio[8])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[8]['judul_vidio']);
                         }?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[8])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[8]['tanggal']);
                         }?></small>
                  </div>
                </div>
                <div class="card">
                 <div class="embed-responsive embed-responsive-16by9">
                     <?php if(empty($vidio[9])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[9]['embed']);
                         }?>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php if(empty($vidio[9])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[9]['judul_vidio']);
                         }?></h5>
                    <p class="card-text"></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php if(empty($vidio[9])){
                       echo "empty";}
                        else{
                          echo  htmlspecialchars_decode($vidio[9]['tanggal']);
                         }?></small>
                  </div>
                </div>
              </div>
              <!-- ========================================================== -->
          </div><!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

          <div class="blog-post">
            
          </div>

          

        </div><!-- /.blog-main -->

        

      </div><!-- /.row -->

    </main><!-- /.container -->
