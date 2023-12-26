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
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header" style="background:#FD5602">
              <h3 class="card-title">Edit Tentang PKS</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="<?= base_url('admin/pks/edit_pks'); ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Visi</label>
                  <input type="hidden" class="form-control" name="id_pks" value="<?php echo $data->id_pks ?>">
                  <textarea class="form-control" name="edit_visi" required="required" autocomplete="off"><?php echo $data->visi ?></textarea>
                </div>
                <div class="form-group">
                  <label>Misi</label>
                  <textarea class="form-control" name="edit_misi" required="required" autocomplete="off" style="text-align: justify;"><?php echo $data->misi ?></textarea>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="hidden" class="form-control" name="sejarah" required="required" autocomplete="off" value="<?php echo $data->sejarah ?>"></textarea>
                  <input type="text" class="form-control" name="edit_alamat" required="required" autocomplete="off" value="<?php echo $data->alamat ?>">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="<?= base_url('admin/pks') ?>" class="btn btn-secondary">Kembali</a>
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