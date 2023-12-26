<style>
  .card-danger .card-outline{
    border-color: #FD5602;
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

          <!-- Profile Image -->
          <div class="card card-danger card-outline" style="border-color:#FD5602">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/img/profile/default.png') ?>" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center"><?php echo $this->session->userdata('nama') ?></h3>
              <p class="text-muted text-center">Username : <?php echo $this->session->userdata('username') ?></p>
              <p class="text-muted text-center">Email : <?php echo $this->session->userdata('email') ?></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  setTimeout(function() {
    document.getElementById('flash-message').style.display = 'none';
  }, 3000);
</script>