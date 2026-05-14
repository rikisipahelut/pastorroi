 <aside class="col-md-4 blog-sidebar">
   <div class="p-3 mb-3 bg-light rounded text-center">
     <h5 class="font-italic"><a href="#" class="text-dark ">About Ps.Roi</a></h5>
     <div class="row align-items-top mt-4">

       <!-- Image -->
       <div class="col-auto pr-2">
         <img
           src="<?php echo base_url(); ?>asset/img/tumb/<?= $about['gambar']; ?>"
           alt="About"
           class="rounded"
           style="width:100px; height:100px; object-fit:cover;">
       </div>

       <!-- Text -->
       <div class="col">
         <p class="mb-0 text-justify text-muted" style="font-size:14px; line-height:1.7;">
           <?= $about["about"]; ?>
         </p>
       </div>

     </div>

   </div>
   <!-- =========== youtube =================== -->

   <div class="embed-responsive embed-responsive-16by9">
     <iframe
       class="embed-responsive-item"
       src="<?= $vidio[0]['embed']; ?>"
       allowfullscreen>
     </iframe>
   </div>
   <!-- =========== End Youtube ===================================== -->
   <!-- Spotify -->
   <div class="embed-responsive embed-responsive-16by9 mt-4">
     <iframe
       class="embed-responsive-item"
       src="<?= $mp3[0]['embed']; ?>"
       frameborder="0"
       allowfullscreen
       allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
     </iframe>
   </div>


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

     <h4 class="font-italic mb-3">Elsewhere</h4>

     <ol class="list-unstyled">

       <li class="mb-2">
         <a href="https://www.facebook.com/PowerStatement" target="_blank" style="color:#1877F2;">
           <i class="fab fa-facebook-square"></i> Facebook
         </a>
       </li>

       <li class="mb-2">
         <a href="#" style="color:#1DA1F2;">
           <i class="fab fa-twitter"></i> Twitter
         </a>
       </li>

       <li class="mb-2">
         <a href="https://www.youtube.com/channel/UCqkIdFZlEZo2B7Cs6aHvrTA" target="_blank" style="color:#FF0000;">
           <i class="fab fa-youtube"></i> Youtube
         </a>
       </li>

       <li class="mb-2">
         <a href="https://www.instagram.com/sipahelut777/" target="_blank" style="color:#E4405F;">
           <i class="fab fa-instagram"></i> Instagram
         </a>
       </li>

       <li class="mb-2">
         <a href="https://anchor.fm/Pselroisipahelut/" target="_blank" style="color:#7F2AFF;">
           <i class="fas fa-podcast"></i> Anchor
         </a>
       </li>

     </ol>

   </div>

   <div class="p-3">
     <h4 class="mb-3">Other Article</h4>

     <style>
       .sidebar-link {
         font-size: 14px;
         line-height: 1.6;
         text-decoration: none;
         color: #333;
         display: block;
         transition: 0.3s;
         text-transform: capitalize;
       }

       .sidebar-link:hover {
         color: #007bff;
         padding-left: 5px;
       }
     </style>

     <ol class="list-unstyled">

       <?php for ($i = 15; $i < 35; $i++): ?>
         <?php if (!empty($aside[$i])): ?>

           <li class="mb-3 border-bottom pb-2">

             <a
               href="<?php echo base_url(); ?>details/index/<?= $aside[$i]['id'] ?>/<?= url_title($aside[$i]['judul'], '-', true); ?>"
               class="sidebar-link">
               <?= ucwords(strtolower($aside[$i]['judul'])); ?>
             </a>

           </li>

         <?php endif; ?>
       <?php endfor; ?>

     </ol>
   </div>

   <div id="carouselExampleControls" class="carousel slide mb-5 p-3" data-ride="carousel">
     <h4 class="">Information Board</h4>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="<?= base_url(); ?>asset/img/tumb/1.jpg" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="<?= base_url(); ?>asset/img/tumb/2.jpg" class="d-block w-100" alt="..."
           onerror="this.onerror=null;this.src='<?= base_url(); ?>asset/img/tumb/1.jpg';">
       </div>
       <div class="carousel-item">
         <img src="<?= base_url(); ?>asset/img/tumb/3.jpg" class="d-block w-100" alt="..."
           onerror="this.onerror=null;this.src='<?= base_url(); ?>asset/img/tumb/1.jpg';">
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
     <div class="mt-4">

       <button
         type="button"
         class="btn btn-primary btn-block d-flex justify-content-between align-items-center px-4 py-3 shadow-sm"
         style="border-radius:12px;">

         <div>
           <i class="fas fa-users mr-2"></i>
           <strong>Visitors Today</strong>
         </div>

         <span class="badge badge-light px-3 py-2" style="font-size:14px;">
           <?= $visitor['hari'] ?? "0"; ?>
         </span>

       </button>

     </div>
   </div>


 </aside><!-- /.blog-sidebar -->