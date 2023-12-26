<style>
  .table-grey th {
    background-color: #f0f0f0;
    /* Warna abu-abu */
  }

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
          <h1>Data Operator</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/operator/dashboard') ?>" style="color:#FD5602">Home</a></li>
            <li class="breadcrumb-item active">Data Operator</li>
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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="float-left">
                <a href="<?= base_url('admin/operator/form_tambah_data') ?>" class="btn btn-danger"><i class="fas fa-plus"></i> Tambah Operator</a>
              </div>
            </div>

            <div class="card-body table-responsive">
              <table class="table table-bordered">
                <thead class="table-grey">
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <!-- <th style="width: 50px">Aksi</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data as $key) {
                  ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $key->nama; ?></td>
                      <td><?php echo $key->username; ?></td>
                      <td><?php echo str_repeat('*', min(6, strlen($key->password))); ?></td>
                      <td><?php echo $key->email; ?></td>
                      <!-- <td>
                        <div class="btn-group btn-group-sm">
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                    </td> -->
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<script>
  setTimeout(function() {
    document.getElementById('flash-message').style.display = 'none';
  }, 3000);
</script>