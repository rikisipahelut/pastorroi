<!-- bagian Halaman Utama -->
<!-- <?php var_dump($mp3);?> -->
      <div class="jumbotron p-3 text-white rounded bg-dark">
        <div class="row">
           <div class="col-md-6 px-0 p-3">
              <h4 class="display-6 font-italic">Quote</h4>
              <p class="lead my-3">"Jadi,Iman Timbul dari pendengaran dan pendengaran Oleh Firman Kristus" <small>ibrani 2 : 3</small></p>
           </div>
           <div class="col-md-6 p-md-4 p-0">
             <iframe src="https://anchor.fm/Pselroisipahelut/embed/episodes/KEPATUHAN-KEPADA-OTORITAS-ALLAH-e4o46g/a-ajk8sd" height="102px" width="400px" frameborder="0" scrolling="no" class="embed-responsive"></iframe>
           </div>
        </div>
       

      </div>

     
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Mp3 Pengajaran
          </h3>

          <div class="blog-post">
        <ul>
          <?php foreach ($mp3 as $mp4):?>
            <li>
              <a href="" data-toggle="modal" data-target="#<?php echo $mp4['id'] ?>">
                <?php echo $mp4['judul_mp3'];?>
              </a>
            </li>
          

          <!-- Modal -->
          <div class="modal fade" id="<?php echo $mp4['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?php echo $mp4['judul_mp3']; ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="p-2"> <!--class awal pl-4 -->
                    <?php echo htmlspecialchars_decode(str_replace('scrolling="no"', 'class="embed-responsive"', $mp4['embed'])) ;?>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </ul>
          <iframe src="" frameborder="0"></iframe>
           
          </div><!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

