<style>
    .btn-danger {
        background-color: #FD5602;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #FE6E00;
    }

  </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" >
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- jika Anda ingin membuat breadcrumb tambahkan disini -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid" >
      <div class="row">
        <div class="col-md-12">
          <div id="flash-message">
            <?= $this->session->flashdata('pesan'); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header" style="background:#FD5602">
              <h3 class="card-title">Profil</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= base_url('admin/operator/edit_profil'); ?>" method="post">

              <div class="card-body">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="hidden" class="form-control" name="id_operator" value="<?php echo $this->session->userdata('id_operator') ?>">

                  <input type="text" class="form-control" name="edit_nama" required="required" autocomplete="off" value="<?php echo $this->session->userdata('nama') ?>">
                  <?= form_error('edit_nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="username" class="form-control" name="edit_username" required="required" autocomplete="off" value="<?php echo $this->session->userdata('username') ?>">
                  <?= form_error('edit_username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <!-- <div class="form-group">
                  <label>Kata Sandi Lama</label>
                  <div class="input-group">
                    <input type="password" class="form-control" name="password" required="required" autocomplete="off" value="<?php echo $this->session->userdata('password') ?>">
                  </div>
                </div> -->

                <div class="form-group">
                  <label>Kata Sandi Baru</label>
                  <div class="input-group">
                    <input type="password" class="form-control" name="new_password" required="required" autocomplete="off">
                    <!-- <div class="input-group-append"> -->
                    <span class="input-group-text">
                      <i id="togglePassword" class="fas fa-eye-slash" onclick="togglePasswordVisibility()"></i>
                    </span>
                    <!-- </div> -->
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="<?= base_url('admin/operator/dashboard') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-danger">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<script>
  var passwordField = document.getElementsByName("new_password")[0];
  var togglePasswordIcon = document.getElementById("togglePasswordField");

  function togglePasswordVisibility() {
    if (passwordField.type === "password") {
      passwordField.type = "text";
      togglePasswordIcon.className = "fas fa-eye";
    } else {
      passwordField.type = "password";
      togglePasswordIcon.className = "fas fa-eye-slash";
    }
  }

  setTimeout(function() {
    document.getElementById('flash-message').style.display = 'none';
  }, 3000);
</script>