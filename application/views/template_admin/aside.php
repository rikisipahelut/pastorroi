<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url().'admin';?>" class="brand-link">
      <img src="<?php echo base_url();?>asset/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8" onContextMenu='return false;'>
      <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>asset/icon.png" class="img-circle elevation-2" alt="User Image" onContextMenu='return false;'>
        </div>
        <div class="info">
          <a href="#" class="d-block">Roi Sipahelut</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EDITOR</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/artikel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/embed_mp3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Embed Mp3</p>
                </a>
              </li>
              <!-- bagian menu aside yang sedang di coment -->
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/embed_vidio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Embed Vidio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/buku" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Link Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/prespective" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pastor Prespective</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/slide" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slide Panti Asuhan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/dokumen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dokumen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/tb_artikel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/tb_embed_mp3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Mp3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/tb_embed_vidio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Vidio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/tb_buku" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/tb_prespective" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar prespective</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url();?>admin/tb_slide" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar slide</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/tb_dokumen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Dokumen</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Menu lain dari Aside yang sedang coment -->
         
         <!--  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
            </ul>
          </li> -->
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
