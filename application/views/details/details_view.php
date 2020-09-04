 <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
         <!--  <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/710x350?theme=thumb" alt="Card image cap"> -->
         <img src="<?= base_url();?>asset/img/tumb/<?= $konten['gambar'];?>" alt="" class="card-img">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $konten['judul']; ?></h2>
            <p class="blog-post-meta"><?php echo $konten['tanggal']; ?> by <a href="#"><?php echo $konten['penulis'];?></a></p>
           <p class="text-justify"><?php echo nl2br($konten['isi']);?></p>


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
       