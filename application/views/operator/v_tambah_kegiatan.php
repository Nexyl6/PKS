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
              <h3 class="card-title">Tambah Kegiatan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="<?= base_url('admin/kegiatan/tambah_kegiatan'); ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul Kegiatan</label>
                  <input type="hidden" class="form-control" name="id_operator" value="<?php echo $this->session->userdata('id_operator') ?>">
                  <input type="text" class="form-control" name="judul_k" required="required" autocomplete="off" value="" placeholder="Judul Kegiatan">
                </div>
                <div class="form-group">
                  <label>Tanggal Kegiatan</label>
                  <input type="date" class="form-control" name="tanggal_k" required="required" autocomplete="off" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar Kegiatan</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="gambar_k[]" accept=".jpg,.jpeg,.png" onchange="validateFile(this)" multiple required="required" autocomplete="off">
                      <label class="custom-file-label" for="exampleInputFile">Pilih file jpg/jpeg/png</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="<?= base_url('admin/kegiatan/data_kegiatan') ?>" class="btn btn-secondary">Kembali</a>
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