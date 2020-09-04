 <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
              <div class="blog-post">
               <h5>Share Perspective</h5>
               <!-- <p><small class="blockquote-footer">December 23, 2013 by Pastor Roi</small></p> -->
               <p class="card-text"><small class="text-muted"><?php echo $prespective['tanggal']; ?></small></p>
               <div class="card">
                <!-- ============================= -->
               <div class="card-header">
                  <?php echo $prespective['judul_status']; ?>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p><?php echo $prespective['status'] ?></p>
                    <footer class="blockquote-footer"><cite title="Source Title">Pastor Roi Sipahelut</cite></footer>
                  </blockquote>
                </div>
              </div>

           <!-- facebook share -->
            <div data-href="<?php echo base_url().$uri?>" data-size="small" style="display: inline;"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpastorroisipahelut.com%2F<?=$uri?>&amp;src=sdkpreparse" style="color: blue; display: inline;"><i class="fab fa-facebook-square fa-3x"></i></a></div>
            <!-- end facebook -->
             <!-- Whatsapp Share -->
             <a href="whatsapp://send?text=<?php echo base_url().$uri?>" style="color: green; display: inline;"><i class="fab fa-whatsapp-square fa-3x"></i></a>
             <!-- end Whatsapp share -->
            <!-- twitter Share -->
             <a href="https://twitter.com/intent/tweet?url=<?= base_url().$uri;?>" style="color: blue; display: inline;"><i class="fab fa-twitter-square fa-3x"></i></a>
             <!-- end Twitter Share -->





          </div><!-- /.blog-post // ada fun gsi-->
         
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
       