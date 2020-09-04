<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Facebook Developer -->
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <!-- og:url harus sama dengan data-href -->
    <meta property="og:url"           content="<?php 
      if (isset($uri)&&isset($id)) {
        echo base_url().$uri;
      }
     ?>"/>
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?php 
      if (isset($judul)) {
        echo $judul;
      }
     ?>" />
    <meta property="og:description"   content="<?php 
      if (isset($isi)) {
        echo word_limiter($isi,15);
      }
     ?>" />
    <meta property="og:image"         content="<?php 
      if (isset($gambar)) {
        echo base_url().'asset/img/tumb/'.$gambar;
      }
     ?>" />


    <!-- <link rel="icon" href="<?php echo base_url();?>asset/favicon.ico"> -->
    <link rel="icon" href="<?php echo base_url();?>asset/icon.png">

    <title><?php echo $judul;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/admin_lte/plugins/fontawesome-free/css/all.min.css">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/blog.css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url('asset/jquery_pribadi/jquery.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('asset/jquery_pribadi/script.js')?>"></script>
  </head>

  <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v4.0"></script>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <!-- <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div> -->
          <div class="col-12 text-center">
            <!-- <a class="blog-header-logo text-dark" href="#">Large</a> -->
            <a class="blog-header-logo text-dark" href="<?php echo base_url();?>home">PastorRoiSipahelut</a>
          </div>
          <!-- <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div> -->
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="<?php echo base_url();?>home">Home</a>
          <a class="p-2 text-muted" href="<?php echo base_url();?>pastor_prespective">Pastor Prespective</a>
          <a class="p-2 text-muted" href="<?php echo base_url();?>vid_pengajaran">Vidio Pengajaran</a>
          <a class="p-2 text-muted" href="<?php echo base_url();?>mp3_pengajaran">Mp3 Pengajaran</a>
          <a class="p-2 text-muted" href="<?php echo base_url();?>koleksi_buku">Koleksi Buku</a>
          <a class="p-2 text-muted" href="<?php echo base_url();?>gereja">Gereja</a>
          <a class="p-2 text-muted" href="<?php echo base_url();?>panti_asuhan">Panti Asuhan</a>
          <form class="form-inline" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" id="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" id="tombol-cari">Search</button>
          </form>
        </nav>

      </div>
      <div class="row">
        <div class="col-md-12">
          
              <?php if (isset($_POST['keyword'])):?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading ml-3">Hasil Pencarian..</h4>
                        <?php foreach ($cari as $asides):?>

                            <ul>
                              <li><a href="<?php echo base_url();?>details/index/<?= $asides['id']?>/<?=$asides['judul'];?>" class="text-dark" ><?php echo $asides['judul'];?></a>
                              </li>
                            </ul>
                        <?php endforeach;?>
                    </div>
              <?php endif ?>
          
         
        </div>
      </div>