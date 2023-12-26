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
        <div class="col-md-12">
        </div>
      </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header" style="background:#FD5602">
              <h3 class="card-title">Edit Data Pengurus</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= base_url('admin/struktur/edit_struktur'); ?>" method="post" enctype="multipart/form-data">

              <div class="card-body">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="hidden" class="form-control" name="id_struktur" value="<?php echo $data->id_struktur ?>">
                  <input type="text" class="form-control" name="edit_nama" required="required" autocomplete="off" value="<?php echo $data->nama ?>">
                  <?= form_error('edit_nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" class="form-control" name="edit_nik" required="required" autocomplete="off" value="<?php echo $data->nik ?>">
                  <?= form_error('edit_nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" name="edit_jabatan" required="required" autocomplete="off" value="<?php echo $data->jabatan ?>">
                  <?= form_error('edit_jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" form-group">
                  <label for="exampleInputFile">Foto</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="edit_foto" accept=".jpg,.jpeg,.png" onchange="validateFile(this)" required="required" autocomplete="off" value="">
                      <label class="custom-file-label" for="exampleInputFile">Pilih file jpg/jpeg/png</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="<?= base_url('admin/struktur/data_struktur') ?>" class="btn btn-secondary">Kembali</a>
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

  function validateFile(input) {
    const validExtensions = ['jpg', 'jpeg', 'png'];
    const fileExtension = input.value.split('.').pop().toLowerCase();

    if (!validExtensions.includes(fileExtension)) {
      input.value = ''; // Clear the input
      alert('Mohon pilih file dengan format jpg, jpeg, atau png.');
    }
  }
</script>