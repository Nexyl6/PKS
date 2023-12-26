<style>
  .login-box-body {
    padding: 40px;
    background-color: rgba(255, 255, 255, 0.8);
    max-width: 400px;
    /* Menambahkan lebar maksimal */
    margin: 0 auto;
    /* Menggeser ke tengah */
  }

  /* Menambahkan latar belakang gambar */
  body.login-page {
    background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url('<?php echo base_url('assets/img/berita1.jpeg') ?>') no-repeat;
    background-size: cover;
    opacity: 0.9;
  }

  .btn-danger {
    background-color: #FD5602;
    transition: background-color 0.3s ease;
    /* Animasi transisi jika diinginkan */
  }

  .btn-danger:hover {
    background-color: #FE6E00;
  }
</style>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-danger" style="border-color:#FD5602">
      <div class="card-header text-center">
        <a href="http://localhost/PKS/" class="h1"><b>PKS</b></a><br>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Masukkan Akun Anda</p>
        <form action="<?= base_url('auth') ?>" method="post">
          <div id="flash-message">
            <?= $this->session->flashdata('pesan'); ?>
          </div>
          <div class="input-group mb-3">
            <input type="username" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off" <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required" autocomplete="off" <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>>
            <span class="input-group-text">
              <i id="togglePassword" class="fas fa-eye-slash" onclick="togglePasswordVisibility()"></i>
            </span>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-danger btn-block">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.login-box -->

  <script>
    var passwordField = document.getElementById("password");
    var togglePasswordIcon = document.getElementById("togglePassword");

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
</body>