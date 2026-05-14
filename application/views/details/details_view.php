 <main role="main" class="container">
   <div class="row">
     <div class="col-md-8 blog-main">
       <!--  <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/710x350?theme=thumb" alt="Card image cap"> -->
       <img src="<?= base_url(); ?>asset/img/tumb/<?= $konten['gambar']; ?>" alt="" class="card-img">
       <h3 class="pb-3 mb-4 font-italic border-bottom">
       </h3>

       <div class="blog-post">
         <h2 class="blog-post-title"><?php echo $konten['judul']; ?></h2>
         <p class="blog-post-meta"><?php echo $konten['tanggal']; ?> by <a href="#"><?php echo $konten['penulis']; ?></a></p>
         <p class="text-justify"><?php echo nl2br($konten['isi']); ?></p>


         <!-- facebook share -->

         <!--   <div class="fb-share-button" data-href="<?php echo base_url() . $uri ?>" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fblok.epizy.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
           -->
         <!-- end facebook -->

         <!-- Whatsapp Share -->
         <!--  <a href="whatsapp://send?text=<?php echo base_url() . $uri ?>">Bagikan ke WhatsApp</a> -->
         <!-- end Whatsapp share -->


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