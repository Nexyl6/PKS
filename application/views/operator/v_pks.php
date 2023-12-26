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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/operator/dashboard') ?>" style="color:#FD5602">Home</a></li>
                        <li class="breadcrumb-item active">Tentang PKS</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div id="flash-message">
      <?= $this->session->flashdata('pesan'); ?>
    </div>
        <div class="container-fuild">
            <!-- Default box -->
            <?php
            $no = 1;
            foreach ($data as $key) {
            ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <h1 class="visi">VISI</h1>
                                <br>
                                <p style="text-align: justify;">
                                    <?php echo $key->visi; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <h1 class="misi">MISI</h1>
                                <p>
                                    <?php
                                    $misiParagraphs = explode("\n", $key->misi); 
                                    foreach ($misiParagraphs as $paragraph) {
                                        echo '<li>';
                                        echo '<div class="text-left">';
                                        echo '<p style="text-align: justify;">' . nl2br($paragraph) . '<p>';
                                        echo '</div>';
                                        echo '</li>';
                                    }
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <h1 class="sejarah">Sejarah</h1>
                                <br>
                                <p style="text-align: justify;">
                                    <?php echo nl2br($key->sejarah); ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <h1 class="alamat">Alamat Kantor PKS</h1>
                                <br>
                                <p><?php echo $key->alamat; ?>
                                </p><br>
                            </div>
                            <div class="float-right">
                                <a href="<?= base_url('admin/pks/form_edit_pks/' . $key->id_pks) ?>" class="btn btn-danger"><i class="fas fa-edit" title="Edit Data"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- /.card -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  setTimeout(function() {
    document.getElementById('flash-message').style.display = 'none';
  }, 3000);
</script>