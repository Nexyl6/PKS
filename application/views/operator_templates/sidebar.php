<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="http://localhost/PKS/" class="brand-link">
    <img src="<?php echo base_url('assets/img/pks.png') ?>" alt="Logo" class="brand-image img-circle elevation-3" style="border-radius: 40%;">
    <span class="brand-text font-weight-light">PKS</span>
</a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/img/profile/default.png') ?>" class="img-circle elevation-2" alt="Profile Image">
      </div>
      <div class="info">
        <a href="<?= base_url('admin/operator/dashboard') ?>"  class="d-block"><?php echo $this->session->userdata('nama') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header">Profil</li>
        <li class="nav-item">
          <a href="<?= base_url('admin/operator/dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-user"></i>
            <p>
              Profil Saya
            </p>
          </a>
        <li class="nav-item">
          <a href="<?= base_url('admin/operator/form_edit_profil') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-key"></i>
            <p>
              Edit Profil
            </p>
          </a>
        </li>


        <li class="nav-header">Data</li>
        <li class="nav-item">
          <a href="<?= base_url('admin/operator/operator/') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-user"></i>
            <p>
              Data Operator
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/berita/data_berita') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-archive"></i>
            <p>
              Data Berita
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/kegiatan/data_kegiatan') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-archive"></i>
            <p>
              Data Kegiatan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/struktur/data_struktur') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-archive"></i>
            <p>
              Data Pengurus
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/pks') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-building"></i>
            <p>
              Tentang PKS
            </p>
          </a>
        </li>
        <li class="nav-header">Pengaturan</li>
        <li class="nav-item">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>