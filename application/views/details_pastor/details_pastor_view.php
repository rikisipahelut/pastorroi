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

         <!-- Facebook Share -->
         <a
           target="_blank"
           href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(base_url() . $uri); ?>"
           style="color:#1877F2; display:inline-block; margin-right:10px;">
           <i class="fab fa-facebook-square fa-3x"></i>
         </a>

         <!-- WhatsApp Share -->
         <a
           href="https://wa.me/?text=<?= urlencode(base_url() . $uri); ?>"
           target="_blank"
           style="color:#25D366; display:inline-block; margin-right:10px;">
           <i class="fab fa-whatsapp-square fa-3x"></i>
         </a>

         <!-- Twitter / X Share -->
         <a
           href="https://twitter.com/intent/tweet?url=<?= urlencode(base_url() . $uri); ?>"
           target="_blank"
           style="color:#1DA1F2; display:inline-block;">
           <i class="fab fa-twitter-square fa-3x"></i>
         </a>





       </div><!-- /.blog-post // ada fun gsi-->

       <nav class="blog-pagination">
         <a class="btn btn-outline-primary" href="#">Older</a>
         <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
       </nav>

     </div><!-- /.blog-main -->