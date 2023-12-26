<<!-- Content Wrapper. Contains page content -->
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
                            <li class="breadcrumb-item active">Detail Kegiatan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- ... -->
            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="judul"><?php echo str_replace('-', ' ', $data->judul_kegiatan) ?></h3>
                            <h6 class="tanggal"><?php echo date('d F Y', strtotime($data->tanggal_kegiatan)); ?></h6>
                            <a href="<?= base_url('admin/kegiatan/data_kegiatan') ?>" class="btn btn-secondary">Kembali</a>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <?php if (is_array($gambar)) {
                                        foreach ($gambar as $key) { ?>
                                            <div class="col-md-4 mb-2">
                                                <a href="../../../file/<?php echo ($key->gambar); ?>" target="_blank">
                                                    <img src="../../../file/<?php echo ($key->gambar); ?>" class="img-fluid" alt="Gambar" style="height:150px">
                                                </a>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->

        <style>
            .gambar {
                max-width: 100%;
                height: auto;
            }
        </style>
    </div>
    <!-- /.content-wrapper -->