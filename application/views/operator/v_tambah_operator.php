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
  <section class="content-header">
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
    <div id="flash-message">
      <?= $this->session->flashdata('pesan'); ?>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header" style="background:#FD5602">
              <h3 class="card-title">Tambah Operator</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo base_url('admin/operator/tambah_data') ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required" autocomplete="off">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="off">
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required" autocomplete="off">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" data-validation="[L>=1]" data-validation-message="Email Tidak Boleh Kosong">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="<?= base_url('admin/operator/operator') ?>" class="btn btn-secondary">Kembali</a>
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
  setTimeout(function() {
    document.getElementById('flash-message').style.display = 'none';
  }, 3000);
</script>